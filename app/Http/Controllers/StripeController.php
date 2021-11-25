<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Account;
use App\Purchase;
use App\Room;
use App\Reservation;
use App\Mail\ConfirmationEmail;
use App\Mail\UserReservationEmail;
class StripeController extends Controller
{
    
   
    public function paypro()
    {
        $username = auth()->user()->name;
        $useremail = auth()->user()->email;
        $token = $_POST['stripeToken'];
        $stripe = new \Stripe\StripeClient(
            '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'
          );
          $stripe->charges->create([
            'amount' => 100000,
            'currency' => 'EUR',
            'source' => $token,
            'description' => 'Your user with name: '.$username.' and email: '.$useremail. 'has already bought a Business Pro Account',
          ]);

            $userId = auth()->user()->id;
            $account = Account::where('user_id', $userId)->first();
            $account->account_type_id = 2;
            $account->valid_until = \Carbon\Carbon::now()->addMonth(12);
            $account->save();

            $purchase = new  Purchase();
            $purchase->user_id = $userId;
            $purchase->acc_type_id = 2;
            $purchase->price = 1000;
            $purchase->reservation_id = null;
            $purchase->date_of_purchase = \Carbon\Carbon::now();
            $purchase->valid_until = \Carbon\Carbon::now()->addMonth(12);
            $purchase->save();

            return redirect('home')->with('status', 'You bought a new account succesfully');
    }

    

    public function payex()
    {
        $username = auth()->user()->name;
        $useremail = auth()->user()->email;
        $token = $_POST['stripeToken'];
        $stripe = new \Stripe\StripeClient(
            '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'
          );
          $stripe->charges->create([
            'amount' => 200000,
            'currency' => 'EUR',
            'source' =>  $token ,
            'description' => 'Your user with name: '.$username.' and email: '.$useremail. 'has already bought a Business Exclusive Account',
          ]);

            $userId = auth()->user()->id;
            $account = Account::where('user_id', $userId)->first();
            $account->account_type_id = 3;
            $account->valid_until = \Carbon\Carbon::now()->addMonth(12);
            $account->save();

            $purchase = new  Purchase();
            $purchase->user_id = $userId;
            $purchase->acc_type_id = 3;
            $purchase->price = 2000;
            $purchase->reservation_id = null;
            $purchase->date_of_purchase = \Carbon\Carbon::now();
            $purchase->valid_until = \Carbon\Carbon::now()->addMonth(12);
            $purchase->save();

            return redirect('home')->with('status', 'You bought a new account succesfully');
    }

    public function payroom()
    {
        $username = request()->name;
        $useremail = request()->email;
        $country = request()->country;
        $phone = request()->phone;
        $price = request()->price;
        $reservationid = request()->reservationid;
        $room_id = request()->roomid;
        $room  = Room::find($room_id);

        $res = Reservation::find($reservationid);
        $token = $_POST['stripeToken'];
        $stripe = new \Stripe\StripeClient(
            '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'
            
          );
          $stripe->charges->create([
            'amount' => 100,
            'currency' => 'EUR',
            'source' => $token,
            'description' => 'Your user with name: '.$username.' and information: email '.$useremail.', phone number: '.$phone.
            ' from '.$country.' has already made reservation for '.$room->name.' in date between '.$res->start_date. ' and '
            .$res->valid_until. 'go to check on this link whole reservation '.'http://localhost/res/public/home'
          ]);

          $userId = auth()->user()->id;

            $purchase = new  Purchase();
            $purchase->user_id = $userId;
            $purchase->acc_type_id = 3;
            $purchase->price = $price;
            $purchase->reservation_id = $reservationid;
            $purchase->date_of_purchase = \Carbon\Carbon::now();
            $purchase->valid_until = \Carbon\Carbon::now()->addMonth(12);
            $purchase->save();

            $emailto = auth()->user()->email;
            
            $roomsname = $room->name;
            
           
            $res->confirmed = 1;
            $res->save();

           

            $info = array(
               'firstname' => request()->firstname, 
               'lastname' =>  request()->lastname,
               'roomsname' => $roomsname,
               'roomid' => $room_id,
               'resid' => $res->id
            );

            $userinfo = array(
              'firstname' => request()->firstname, 
              'lastname' =>  request()->lastname,
              'roomsname' => $roomsname,
              'roomid' => $room_id,
              'startdate' => $res->start_date,
              'validuntil' => $res->valid_until,
              'days' => $res->number_of_days,
              'price' => $price / $res->number_of_days,
              'totalprice' => $price
            );

            $emailrenter = $room->user->email;
            $emailsmanager = array(
              'emailrenter' => $emailrenter,
              'adminemail' => "developersforanymarket@gmail.com"
            );
            
          try{
            Mail::cc($emailto)->send(new UserReservationEmail($userinfo));
            Mail::cc($emailsmanager)->send(new ConfirmationEmail($info));
 
            return redirect('home')->with('status', 'You make a reservation successfully');
          }
          catch(\Throwable $e)
          {
            return abort(500);
          }          
            
            
    }
    
}
