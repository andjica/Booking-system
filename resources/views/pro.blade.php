@extends('layout.template')

@section('content')

<div class="container">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center cont">
  <h1 class="display-4"><i class="fa fa-shopping-cart fa-2x"></i>Pricing with credit card</h1>
  <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap 
  example. It’s built with default Bootstrap components and utilities with little customization.</p>
  
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 border shadow">
        <div class="panel-heading display-table border-dark mb-5">
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
        </div>
      
            <form action="{{route('stpaypro')}}" method="post" id="payment-form">
            @csrf
            <div class="form-row">
                <label for="card-element">
                    Your infomation
                </label>
                <label for="card-element">
                    
                </label>
            </div>
            <div class="form-row">
                <input type="" value="{{auth()->user()->name}}" class="StripeElement"> &nbsp;
                <input type="" value="{{auth()->user()->email}}" class="StripeElement">
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
            <button class="btn btn-success">Submit Payment</button>
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
            
       
            <p><h1>Features:</h1>
                <ul>
                    <li>Buy a Business Pro Account</li>
                    <li>With this account you can make many rooms / apartaments</li>
                    <li>Let's prepare for users best location and choose</li>
                    <li>Make a 100 aprtaments / rooms</li>
                    <li>Creates a Stripe credit card token</li>
                </ul>
            </p>
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
 
</style>

@endsection

