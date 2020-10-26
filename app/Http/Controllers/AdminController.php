<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Renter;
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
}
