<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Country;
use App\City;
use App\Reservation;
use App\Renter;
use Illuminate\Support\Carbon;
use Calendar;
use DateTime;

class RenterController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function confirmed($id)
    {
        $reservation = Reservation::where('id', $id)->first() ?? abort(400);
        if($reservation->confirmed == 2 || $reservation->confirmed == 3)
        {
            return abort(404);
        }
        $roomId = $reservation->room_id;
        $room = Room::find($roomId);
        
        $reservations = [];
        $data = Reservation::where('room_id', $id)->where('confirmed', 2)->get();
        
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

    public function viewres($id)
    {
        $reservation = Reservation::where('id', $id)->first() ?? abort(400);
        
        $roomId = $reservation->room_id;
        $room = Room::find($roomId);
        
        $reservations = [];
        $data = Reservation::where('room_id', $id)->where('confirmed', 2)->get();
        
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
        return view('renter.viewres', compact('reservation', 'room','calendar','arrayOfDisableDates'));
    }

    public function reservations()
    {
        $renter = auth()->user()->id;

        $count = Reservation::where('renter_id', $renter)->count();

        if($count == 0)
        {
            return redirect()->back()->with('success', 'There is no still any rooms for reservations');
        }

        //$rooms = Room::where('user_id', $renter)->first();
        //$id = $rooms->id;

        //payed and confired by renter
        $res2 = Reservation::where('confirmed', 2)
        ->where('renter_id', $renter)->limit(4)->get();

        //payed but dropped
        $res3 = Reservation::where('confirmed', 3)
        ->where('renter_id', $renter)->limit(4)->get();

        //payed but on waiting
        $res1 = Reservation::where('confirmed', 1)
        ->where('renter_id', $renter)->limit(4)->get();
        
        
        

        return view('renter.reservations', compact('rooms', 'res2', 'res3', 'res1'));
    }




    public function accept($id)
    {
        $reservation = Reservation::find($id);
        $reservation->confirmed = 2;
        
        try{
            $reservation->save();
            return redirect('reservations')->with('success', 'You update reservation successfully');
        }
        catch(\Throwable $e)
        {
            return abort(500);
        }
    }

    public function drop($id)
    {
        $reservation = Reservation::find($id);
        $reservation->confirmed = 3;
        
        try{
            $reservation->save();
            return redirect('reservations')->with('success', 'You update reservation successfully');
        }
        catch(\Throwable $e)
        {
            return abort(500);
        }
    }

    public function pending($id)
    {
        $reservation = Reservation::find($id);
        $reservation->confirmed = 1;
        
        try{
            $reservation->save();
            return redirect('reservations')->with('success', 'You update reservation successfully');
        }
        catch(\Throwable $e)
        {
            return abort(500);
        }
    }

    public function supportteam()
    {
        return view('renter.supportteam');
    }

    public function supportadmin()
    {
        return view('renter.supportadmin');
    }

   

    public function supportaccoounting()
    {
        return view('renter.supportaccoounting');
    }

    public function settings()
    {
        $countries = Country::all();
        $cities = City::all();

        if(request()->value)
        {
        $val = request()->value;
        $subcities = City::where('country_id', $val)->get();
        return response()->json(['val' => $val, 'subcities' => $subcities])->header("Access-Control-Allow-Origin",  "*");
        }

        $usercount = Renter::where('user_id', auth()->user()->id)->count();

        $user = Renter::where('user_id', auth()->user()->id)->first();
        
        return view('renter.settings', compact('countries', 'cities', 'user', 'usercount'));
    }

    public function setrenter()
    {

        $usercount = Renter::where('user_id', auth()->user()->id)->count();

        if($usercount > 0)
        {
            
            $renter = Renter::where('user_id', auth()->user()->id)->first();
            $renter->user_id = auth()->user()->id;
            $renter->company_name = request()->company;
            $renter->telephone_num = request()->tel;
            
            $renter->address = request()->add;
            $renter->post_num = request()->zip;

            if(request()->city)
            {
                $renter->city_id = request()->city;
            }
            
            
            $renter->save();
            return redirect()->back();
        }
        else
        {
            $renter = new Renter();
            $renter->user_id = auth()->user()->id;
            $renter->company_name = request()->company;
            $renter->telephone_num = request()->tel;
            
            $renter->address = request()->add;
            $renter->post_num = request()->zip;
            $renter->city_id = request()->city;
            
            $renter->save();
            return redirect()->back();
        }
        

    }

    public function setcard()
    {
        $usercount = Renter::where('user_id', auth()->user()->id)->count();

        if($usercount > 0)
        {
            $renter = Renter::where('user_id', auth()->user()->id)->first();
            
            $renter->iban = request()->iban;
            $renter->save();
            return redirect()->back()->with('status', 'You update your information successfully');
        }
        else
        {
            return redirect()->back()->with('status', 'Please write your information first then eneter iban');
        }
        

       
    }
    public function activeres()
    {
        $renter = auth()->user()->id;
        $res2 = Reservation::where('confirmed', 2)
        ->where('renter_id', $renter)
        ->orderBy('created_at', 'desc')
        ->paginate(8);

        return view('renter.active-res', compact('res2'));
    }

    public function droppedres()
    {
        $renter = auth()->user()->id;
        $res3 = Reservation::where('confirmed', 3)
        ->where('renter_id', $renter)->orderBy('created_at', 'desc')
        ->paginate(8);

        return view('renter.dropped-res', compact('res3'));
    }
}
