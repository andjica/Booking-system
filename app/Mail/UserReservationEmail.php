<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserReservationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $userinfo;

    public function __construct($userinfo)
    {
        $this->userinfo = $userinfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = auth()->user()->email;
        //$emails = array($email, "developersforanymarket@gmail.com", 'andjaaa95@gmail.com');

        
            return $this->from($email)
            ->subject('You made reservation successfully.Thank you for reservation ')
            ->to($email)
            ->view('emails.user.reservation')->with('userinfo', $this->userinfo);
          
    }
}
