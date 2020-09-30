<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Room;
use App\Image;
use App\Reservation;
use App\Country;
use App\City;
use App\Category;
use Calendar;
use DateTime;
use App\Mail\ConfirmationEmail;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {


        $rooms = Room::where('user_id', auth()->user()->id)->get();
        $roomscount = Room::where('user_id', auth()->user()->id)->count();

        return view('renter.rooms', compact('rooms', 'roomscount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $count = Room::where('user_id', auth()->user()->id)->count();
        $r = Room::where('user_id', auth()->user()->id)->latest()->first();
        $countries = Country::all();
        $categories = Category::all();
        $useraccount = auth()->user()->account->accounttype;
        $account = $useraccount->id;

        if(request()->value)
        {
        $val = request()->value;
        $subcities = City::where('country_id', $val)->get();
        return response()->json(['val' => $val, 'subcities' => $subcities])->header("Access-Control-Allow-Origin",  "*");
        }

        return view('renter.add-room', compact('r', 'count', 'countries','account', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        request()->validate([
            'title'=>'required|min:3|max:75',
            'desc1'=>'required|min:10|max:200',
            'desc2'=>'required|min:10',
            'desc3'=>'required|min:10',
            'price'=>'required|numeric',
            'number'=>'required|numeric',
            'square' => 'required|numeric',
            'add' => 'required|min:7|max:55',
            'numberbath' => 'required',
            'pets' => 'required|not_in:0',
            'beds' => 'required|not_in:0',
            'city' => 'required|not_in:0',
            'country' => 'required|not_in:0',
            'category' => 'required|not_in:0'
        ],
        [
            'title.required' => 'You must give a name of your room'
        ]);


        $room = new Room();
        $room->name = request()->title;
        $room->description_one = request()->desc1;
        $room->description_two = request()->desc2;
        $room->description_tree = request()->desc3;
        $room->prize = request()->price;
        $room->number_of_rooms =request()->number;
        $room->square = request()->square;
        $room->address = request()->add;
        $room->number_of_bath = request()->numberbath;
        $room->pets = request()->pets;
        $room->user_id = auth()->user()->id;
        $room->beds = request()->beds;
        $room->city_id = request()->city;
        $room->category_id = request()->category;

        try
        {
           
            $room->save();

            return redirect()->back()->with('success', 'You added a new room');
        }
        catch(\Throwable\Exception $e)
        {
            return abort(500);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::find($id) ?? abort(404);
        $img = $room->image;
        //$room =Room::with('image')->where('id',$id)->first() ?? abort(404);

        $rooms= Room::all();
        $image = Image::first();

        $images = Image::where('room_id', $id)->skip(1)->limit(4)->get();
        $imagesslider = Image::where('room_id', $id)->skip(1)->take(PHP_INT_MAX)->get();

        $reservations = [];
        $data = Reservation::where([
            'room_id'=>$id,
            'confirmed'=>2
        ])->get();

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

        return view('room-id', compact('room','img', 'rooms', 'calendar','arrayOfDisableDates', 'images', 'imagesslider'));
    }
    public function defaultDays($arrayOfDisableDates)
    {
        $startYearsAgo = new \DateTime("1970-01-01");
        $now = new \DateTime();
        //without plus 1, not catched last date
        $now = $now;
        $interval = new \DateInterval('P1D');
        $arrayOfDisableDates[]= new \DatePeriod($startYearsAgo, $interval ,$now);
        return $arrayOfDisableDates;
    }
    public function checkdates()
    {
        $startDate = request('startDate');
        $endDate = request('endDate');

        $begin = new DateTime($startDate);
        $end = new DateTime($endDate);
        $end = $end->modify( '+1 day' );

        $interval = new \DateInterval('P1D');
        $daterange = new \DatePeriod($begin, $interval ,$end);

        $wantedDates = [];
        foreach($daterange as $date){
            $wantedDates[]=$date->format("m-d-Y");
        }


        $roomId = \request('room_id');

        $room = Room::find($roomId);
        $reservationsForTheRoom = Reservation::where([
            'room_id'=>$roomId,
            'confirmed'=>1
        ])->get();
        $arrayOfDates =[];
        if($reservationsForTheRoom->count()){

            foreach ($reservationsForTheRoom as $key => $value) {
//           stepper
                $begin = new \DateTime($value->start_date);
                $end = new \DateTime( $value->valid_until);

                $end = $end->modify( '+1 day' );

                $interval = new \DateInterval('P1D');
                $arrayOfDates[]= new \DatePeriod($begin, $interval ,$end);

            }
        }
        $disabledDates = [];
        foreach($arrayOfDates as $daterange)
        {
            foreach($daterange as $date){
                $disabledDates[]=$date->format("m-d-Y");
            }
        }

        $data['wantedDates'] = $wantedDates;
        $data['disabledDates'] = $disabledDates;


        return $data;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function reservate()
    {
        $firstName = request('firstName');
        $lastName = request('lastName');
        $numberOfDays = request('number_of_days');
        $purposeOfRenting = request('purposeOfRenting');
        $startDate = request('startDate');
        $startDateGoodFormat= explode('/',$startDate);
        $newGoodStartDate = $startDateGoodFormat[2]."-".$startDateGoodFormat[0]."-".$startDateGoodFormat[1];
        $endDate = request('endDate');
        $endDateGoodFormat = explode('/',$endDate);
        $newGoodEndDate = $endDateGoodFormat[2]."-".$endDateGoodFormat[0]."-".$endDateGoodFormat[1];

        $totalPrice = request('totalPrice');
        $room_id = request('room_id');

        $re = Room::where('id', $room_id)->first();
        $renter = $re->user_id;
        $reservation = new Reservation();
//add user id
        $reservation->user_id = auth()->user()->id;
        $reservation->renter_id = $renter;
        $reservation->room_id = $room_id;
        $reservation->confirmed = 0;
        $reservation->name = $firstName;
        $reservation->lastname = $lastName;
        $reservation->purposeOfRenting =$purposeOfRenting;
        $reservation->typeOfProject = request('typeOfProject');
        $reservation->role = request('role');
        $reservation->numberOfPeople = request('numberOfPeople');
        $reservation->start_date = $newGoodStartDate;
        $reservation->valid_until = $newGoodEndDate;
//        serverski odraditi racunanje broja dana i ukupnu cenu
        $reservation->number_of_days = $numberOfDays;
        $reservation->total_price = $totalPrice;
        $reservation->save();

        $resid = $reservation->id;
       

        return response()->json(['roomid'=>$room_id, 'resid' =>$resid]);

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
        $room = Room::find($id) ?? abort(404);

        try{
            $img = Image::where('room_id', $room->id)->delete();

            $room->delete();
            
            return redirect()->back()->with('success', 'You delete ' .$room->name. ' successfully :');
        }
        catch(\Throwable $e)
        {
            return abort(500);
        }



    }
}
