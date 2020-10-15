<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send()
    {
        $data = ([
            'name' => request()->name,
            'email' => request()->email,
            'subject' => request()->subject,
            'message' => request()->message
        ]);

        $emailto = request()->email;
    
       
            Mail::cc($emailto, 'developersforanymarket@gmail.com')->send(new ContactEmail($data));
                
            return back()->with('success', 'Thank you for sending email to Us');
    }
}
