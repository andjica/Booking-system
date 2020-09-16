<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $info;

    public function __construct($info)
    {
        $this->info = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $email = auth()->user()->email;
    
        $emails = array($email, "developersforanymarket@gmail.com", 'andjaaa95@gmail.com');

        
            return $this->from($email)
            ->subject('New reservation '.' from '.request()->firstName)
            ->to($emails)
            ->view('emails.reservation')->with('info', $this->info);
          
        
    }
}
