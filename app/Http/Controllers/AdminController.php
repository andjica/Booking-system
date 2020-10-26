<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Renter;
use App\Room;

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
}
