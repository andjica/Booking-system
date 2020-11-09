@extends('layout.template')

@section('content')

<div class="container">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center cont">
  <h1 class="display-4"><i class="fa fa-shopping-cart fa-2x"></i>Payment with credit card</h1>
  <p class="lead">Thank you for your reservation, after the succesfull payment you will receive a confirmation by mail.
  Check your mailbox for the confirmation.</p>
  
</div>
</div>

<div class="container">
    <div class="row border p-3">
        <div class="col-lg-6 border shadow bg-light">
        <div class="panel-heading display-table shadow-lg">
                    <div class="row display-tr" >
                        <h3 class="display-td">Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>    
                           
        </div>
        
            <form action="{{route('stpayroom')}}" method="post" id="payment-form" class="bg-form p-3">
            @csrf
            <div class="form-row">
                <label for="card-element">
                    Your infomation
                </label>
                <label for="card-element">
                    
                </label>
            </div>
            <div class="form-row">
            <div class="col"> 
                <input type="text" value="{{auth()->user()->name}}" class="StripeElement" name="name"> 
            </div>
            <div class="col"> 
            <fieldset disabled>
                <input type="email" value="{{auth()->user()->email}}" class="StripeElement" name="email">
          </fieldset>
            </div>
            </div><br>
            <div class="form-row">
                <div class="col"> 
                    <label for="Country">Phone number</label>
                    <input type="text" value="" class="StripeElement" name="phone"> 
                </div>
                <div class="col"> 
                    <label for="Country">Country</label>
                    <input type="text" value="" class="StripeElement" name="country"> 
                </div>
                @isset($reservation)
                <input type="hidden" name="price" value="{{$reservation->total_price}}">
                <input type="hidden" name="reservationid" value="{{$reservation->id}}">
                <input type="hidden" name="firstname" value="{{$reservation->name}}">
                <input type="hidden" name="lastname" value="{{$reservation->lastname}}">
                @endisset
                @isset($room)
                <input type="hidden" name="roomid" value="{{$room->id}}">
                @endisset
            </div><br>
            <div class="form-row">
            <label for="card-element">
                Credit or debit card
                </label></div>
            <div class="form-row">
                
                <div id="card-element" style="width:60%">
                <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
            </div>
            <br>
            <button class="btn btn-success btn-lg">Submit Payment</button>
            </form>
            <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
               
                </div>
            </div>

            <div class="col-lg-6">
            
            @isset($reservation)
            <p>Invoice include this information:</p>
            <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Name of hotel / apartament / room:</h6>
                <small class="text-muted"><h4>{{$reservation->room->name}}</h4></small>
              </div>
              <span class="text-muted"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Check in</h6>
                <small class="text-muted"></small>
              </div>
              <span class="text-muted">{{$reservation->start_date}}&nbsp; <svg width="1em" height="1em" viewBox="0 0 16 16" class="text-success bi bi-calendar-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                </svg></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Check out </h6>
                <small class="text-muted"></small>
              </div>
              <span class="text-muted">{{$reservation->valid_until}}&nbsp; <svg width="1em" height="1em" viewBox="0 0 16 16" class="text-danger bi bi-calendar-event-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM0 5h16v9a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5zm12.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                    </svg></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Number of days:</h6>
                <small class="text-muted"></small>
              </div>
              <span class="text-muted">{{$reservation->number_of_days}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Price for a day</h6>
                <small></small>
              </div>
              <span class="text-success">@isset($room) {{$room->prize}} @endisset</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>${{$reservation->total_price}}</strong>
            </li>
          </ul>

            @endisset
            <p>Be sure that we we keep your credit card information secure</p>
            
            <p>Built upon: Bootstrap, jQuery, 
                <a href="{{route('rooms')}}/">Go back to dashboard</a>, 
                <a href="{{route('register')}}">Make a new registeration</a>,
                and <a href="{{route('price')}}">Buy another accounts :)</a>
            </p>
        </div>
            </div>
        </div>
    </div>
  </div>
  
@endsection

@section('css')
<script src="https://js.stripe.com/v3/"></script>
<style>
     .cont
     {
         margin-top:150px;
         margin-bottom:100px;
     }

     .btn-orange
     {
         background:#FDAE5C;
         color:white;
     }

     .bg-form
     {
         background:#fcd669;
     }
 
</style>

@endsection

