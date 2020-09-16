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

  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Free</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>5 rooms</li>
          <li>No limited time for rooms</li>
          <li>Update your rooms</li>
          <li>Help center access</li>
        </ul>
        @if(auth()->user())
        <a href="{{route('home')}}" class="btn btn-lg btn-block btn-outline-primary">Stay using free</a>
        @else
        <a href="{{route('login')}}" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</a>
        @endif
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Business Pro</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$1000 <small class="text-muted">/ per year</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>200 apartamnest / rooms</li>
          <li>You can edit your rooms</li>
          <li>Unlimited images</li>
          <li>Help center access</li>
        </ul>
        @if(auth()->user())
            @if(auth()->user()->account->account_type_id == 2)
            <a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">You have already this account</a>
            @else
            <a href="{{route('price-pro')}}" class="btn btn-lg btn-block btn-info">Buy Business Pro</a>
            @endif
        @else
        <a href="{{route('login')}}" class="btn btn-lg btn-block btn-info">Buy Business Pro</a>
        @endif
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Business Enterprise</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$2000 <small class="text-muted">/ per year</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Unlimited rooms / apartaments</li>
          <li>Everything free</li>
          <li>Unlimited images</li>
          <li>Help center access</li>
        </ul>
        @if(auth()->user())
        <a href="{{route('price-ex')}}" class="btn btn-lg btn-block btn-orange">Buy Business Exclusive</a>
        @else
        <a href="{{route('login')}}" class="btn btn-lg btn-block btn-orange">Buy Business Exclusive</a>
        @endif
      </div>
    </div>
  </div>
  <img src="{{asset('/')}}image/che.png" height="150px;">
@endsection

@section('css')
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