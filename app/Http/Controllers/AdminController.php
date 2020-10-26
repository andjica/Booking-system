<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Renter;
use App\Room;
use App\Reservation;

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
        
        return view('admin.renter', compact('r', 'rooms'));
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
}
