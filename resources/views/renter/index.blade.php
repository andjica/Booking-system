@extends('layout.template')

@section('content')

<div class="container-fluid cont">
      <div class="row">
      @include('renter.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
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
                This week
              </button>
            </div>
          </div>
        <div class="row justify-content-center mt-5">
                <div class="col-md-4">
                <div class="card text-left">
                    <div class="card-header ">
                    <i class="fa fa-home fa-3x text-danger"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Welcome {{auth()->user()->name}} <i class="fa fa-heart text-danger"></i></h5>
                        <p class="card-text">This is a dashboard for you, here you can insert your rooms.</p>
                        <a href="{{asset('/create-room')}}" class="btn btn-primary">Add new room <i class="fa fa-plus-square text-warning"></i></a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
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
                    <div class="card-footer text-muted">
                        2 days ago
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
                    <div class="card-footer text-muted">
                        2 days ago
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

