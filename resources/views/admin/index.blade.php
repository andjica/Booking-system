@extends('layout.template')

@section('content')

<div class="container-fluid cont">
      <div class="row">
      @include('admin.sidebar')

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">@if(session('success'))
                <div class="alert alert-warning">
                    {{session('success')}}
                </div>
                @endif

                    You are logged in!</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
            
              </button>
            </div>
          </div>
        <div class="row justify-content-center mt-5 pb-5 border-bottom">
                <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header ">
                    <i class="fa fa-home fa-3x text-danger"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Welcome to Admin Panel {{auth()->user()->name}} <i class="fa fa-heart text-danger"></i></h5>
                        <p class="card-text">This is a dashboard for you, here you can see all renters</p>
                        <a href="{{route('admin-renters')}}" class="btn btn-info">View Renters</a>
                    </div>
                   
                    </div>
                </div>
                <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">
                    <i class="fa fa-home fa-2x text-info"></i>
                    <i class="fa fa-home fa-3x text-secondary"></i>
                    <i class="fa fa-home fa-2x text-success"></i>
                    
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">See your rooms</h5>
                        <p class="card-text">Lets see your rooms, edit and delete it! Make a very unique description for room</p>
                        <a href="{{route('rooms')}}" class="btn btn-primary">See more</a>
                    </div>
                   
                    </div>
                </div>
                <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">
                    <i class="fa fa-clipboard text-primary fa-3x"></i>
                    <i class="fa fa-clipboard text-warning fa-2x"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Booking</h5>
                        <p class="card-text">Who make reservation? You can see reservation book for your rooms</p>
                        <a href="{{route('reservations')}}" class="btn btn-primary">Manage reservation</a>
                    </div>
                    
                    </div>
                </div>
                </div>
            
            <div class="row justify-content-center mt-5 bg-light pb-5">

                <div class="col-md-4 mt-3">
                <div class="card text-center">
                    <div class="card-header ">
                    <i class="fas fa-question-circle fa-3x text-success"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Contact Admin and Support Team <i class="fas fa-hammer"></i></h5>
                        <p class="card-text">Do you have any problem with our website platform or you need any more information. Please, contact US!</p>
                        <a href="{{route('support-team')}}" class="btn btn-success">Contact here &nbsp;<i class="fa fa-plus-square text-white"></i></a>
                    </div>
                   
                    </div>
                </div>

                <div class="col-md-4 mt-3">
                <div class="card text-center">
                    <div class="card-header ">
                    <i class="fas fa-question-circle fa-3x text-success"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Contact for help <i class="fas fa-medkit text-muted"></i></h5>
                        <p class="card-text">Contact Admin for more help - especially if you have problems with your email, password or programmering bugs</p>
                        <a href="{{route('support-admin')}}" class="btn btn-success">Contact here &nbsp;<i class="fa fa-plus-square text-white"></i></a>
                    </div>
                   
                    </div>
                </div>

                <div class="col-md-4 mt-3">
                <div class="card text-center">
                    <div class="card-header ">
                    <i class="fas fa-money-check-alt fa-3x text-warning"></i> <i class="fas fa-question-circle fa-2x text-success"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Contact Our Accounting management Team <i class="fa fa-heart text-danger"></i></h5>
                        <p class="card-text">Contact for your accounting information - invoices..</p>
                        <a href="{{route('support-accounting')}}" class="btn btn-success">Contact here &nbsp;<i class="fa fa-plus-square text-white"></i></a>

                    </div>
                   
                    </div>
                </div>
                </div>
            </div>
        </div>
</div>

@endsection

@section('css')
    <style>
     .cont
     {
         margin-top:150px;
         margin-bottom:100px;
     }
    </style>
@endsection

