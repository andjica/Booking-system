<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

class EmailController extends Controller
{
    public function send()
    {
        $data = ([
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'subject' => request()->subject,
            'message' => request()->message
        ]);

        $emailto = auth()->user()->email;
    
       
            Mail::cc($emailto, 'developersforanymarket@gmail.com')->send(new ContactEmail($data));
                
            return back()->with('success', 'Thank you for sending email to Us');
    }
}
