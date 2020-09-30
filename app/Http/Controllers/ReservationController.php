<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Room;
use Illuminate\Support\Carbon;
use Calendar;
use DateTime;
class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('calendar', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {         

        request()->validate([
            'start'=> 'required',
            'end' =>'required'
        ]);
        
        
        $price = request()->price;
        $room = request()->roomid;
        $roomname = request()->roomname;

        $renters = Room::where('user_id', request()->roomid)->first();
        $renter = $renters->id;
        //pronalazenje broja dana izmedju dva datuma
        $createdate=request()->start;
        $validdate=request()->end;
        
        $start = Carbon::parse($createdate);
        $end =  Carbon::parse($validdate);

        //konacni broj dana
        $days = $end->diffInDays($start);
        
        //izracunavanje cene po danu
        $total =  $price*$days;
       


        $resdate = Reservation::where('start_date','<=',$createdate)
        ->where('valid_until','>=',$validdate)
        ->first();

        $useremail = auth()->user()->email;

        if($resdate)
        {
            return redirect()->back()->with('error', 
            'Sorry but reservation already exist');
        }
        else
        {
             
            $rez = Reservation::create([
                'user_id'=> auth()->user()->id,
                'renter_id' => $renter,
                'room_id'=> $room,
                'valid_until' => $validdate,
                'number_of_days'=> $days,
                'start_date'=>$createdate,
                'total_price' => $total,
                'confirmed' => 0
            

                
            ]);
            return redirect()->back()->with('message', 
            'Thank you for making reservation for: ' .$roomname. ', 
            your price for a day is:' .$price. ' Number of days are: '
            .$days.' And total price for '.$days.' is '.$total);

            $data =([
                $roomname,
                $price,
                $days,
                $total,
                $useremail
            ]);
            //automatsko slanje mejla o informacijama 
            Mail::send('emails.welcome', $data, function ($message) {
                $message->from('developersforanymarket.com', 'Laravel');
            
                $message->to('$useremail')->cc('bar@example.com');
            });
        }
        
        return  statuscode(500);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmation($id)
    {
        $reservation = Reservation::where('room_id', $id)->first() ?? abort(400);
        $room = Room::find($id);
        $reservations = [];
        $data = Reservation::where('room_id', $id)->where('confirmed', 1)->get();
        
        $arrayOfDisableDates =[];
        if($data->count()){
           foreach ($data as $key => $value) {

             $reservations[] = Calendar::event(

                $value->room->name,
                $value->name,
                 new \DateTime($value->start_date),

                 new \DateTime($value->valid_until.' +1 day')

             );

//           stepper
               $begin = new \DateTime($value->start_date);
               $end = new \DateTime( $value->valid_until);
//    without plus 1, not catched last date
               $end = $end->modify( '+1 day' );
               $interval = new \DateInterval('P1D');
               $arrayOfDisableDates[]= new \DatePeriod($begin, $interval ,$end);

//               protection that all dates before today are disabled
             $arrayOfDisableDates = $this->defaultDays($arrayOfDisableDates);

           }

        }

       $calendar = Calendar::addEvents($reservations);

        if(count($arrayOfDisableDates)==0)
//        must have this if because of the first if
        {
//            case when there is no reserved dates in db
           $arrayOfDisableDates= $this->defaultDays($arrayOfDisableDates);
        }
        return view('renter.conf', compact('reservation', 'room','calendar','arrayOfDisableDates'));
    }
    public function defaultDays($arrayOfDisableDates)
    {
        $startYearsAgo = new \DateTime("1970-01-01");
        $now = new \DateTime();
        //without plus 1, not catched last date
        $now = $now->modify( '+1 day' );
        $interval = new \DateInterval('P1D');
        $arrayOfDisableDates[]= new \DatePeriod($startYearsAgo, $interval ,$now);
        return $arrayOfDisableDates;
    }

    //reservation - user pay blade

    public function payforroom($id)
    {
        
        
        $reservation = Reservation::find($id) ?? abort(400);
        if($reservation->confirmed == 1)
        {
            return abort(403);
        }
        $roomid = $reservation->room_id;
        $room = Room::find($roomid);
        return view('payroom', compact('room', 'reservation'));
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
