<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = auth()->user()->id;

        $user = User::where('id', $userId)->first();

        if($user->role_id == 1)
        {
            return view('admin.index');
        }
        elseif($user->role_id == 3)
        {
            return view('renter.index');
        }
        else
        {
            $count = Reservation::where('user_id', $userId)->count();
            $res = Reservation::where('user_id', $userId)->first();
            
    
            return view('user.index', compact('count', 'res'));
        }
       
    }

    public function reservations()
    {
        $user = auth()->user()->id;
        $reservations = Reservation::where('user_id', $user)->paginate(2);
        $rescount = Reservation::where('user_id', $user)->count();

        return view('user.res', compact('reservations', 'rescount'));
    }
}
