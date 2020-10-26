<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Renter;
use App\Room;
use App\Reservation;
use Illuminate\Support\Carbon;
use Calendar;
use DateTime;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function renters()
    {
        $renters = Renter::all();
        

        return view('admin.renters', compact('renters'));
    }

    public function renter($id)
    {
        $r = Renter::where('id', $id)->first() ?? abort(404);
        $user = $r->user_id;
       

        $rooms = Room::where('user_id', $user)->get();
        
        $res2 = Reservation::where('renter_id', $user)
        ->where('confirmed', 2)
        ->orderBy('created_at', 'desc')->get();

        return view('admin.renter', compact('r', 'rooms', 'res2'));
    }

    public function destroy($id)
    {
        $renter = Renter::find($id) ?? abort(404);
        
        $user = $renter->user_id;

        $renter->delete();
        $rooms = Room::where('user_id', $user)->delete();
        $reservations = Reservation::where('renter_id', $user)->delete();

        return redirect('admin-renters')->with('success', 'You delete renter successfully');

    }

    public function active($id)
    {
        $renter = Renter::where('id', $id)->first();
        $userrenter = $renter->user_id;
       
        $res2 = Reservation::where('renter_id', $userrenter)->where('confirmed', 2)->orderBy('created_at', 'desc')->get();
    return view('admin.active-res', compact('res2', 'renter'));

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
        return view('admin.viewres', compact('reservation', 'room','calendar','arrayOfDisableDates'));
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

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function search()
    {
        $q = request()->text;
       
        $countrenters =  Renter::where('company_name', 'LIKE', '%'. $q .'%')
        ->count();

        $renters = Renter::where('company_name', 'LIKE', '%'. $q .'%')
            ->get();

        return view('admin.search-by-renter', compact('renters', 'countrenters'));

        
        
    }

}
