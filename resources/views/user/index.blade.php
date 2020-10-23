@extends('layout.template')

@section('content')

<div class="container-fluid cont">
      <div class="row">
      @include('user.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <i class="fa fa-home text-info"></i> You are logged in!</h1>
            
          </div>
        <div class="row mt-5">
                <div class="col-md-10">
                <div class="card text-left">
                    <div class="card-header bg-dark">
                    
                    <img src="{{asset('/')}}img/logo3.png" class="img-fluid" width="180px">
                    <img src="{{asset('/')}}img/logic.png" class="img-fluid" width="180px">
                    </div>
                    @if($count > 0)
                    <div class="card-body">
                        <h4 class="card-title">Welcome {{auth()->user()->name}} <i class="fa fa-heart text-danger"></i></h4>
                       </div>
                    <div class="row p-2">
                        <div class="col-md-4">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Congrats {{auth()->user()->name}} <i class="fas fa-award fa-2x text-warning"></i></h4>
                            <h6 class="card-subtitle mb-2 text-muted">See your reservation</h6>
                            <p class="card-text">
We are grateful that you made a reservation through World Media Location Platform <i class="fas fa-smile-beam text-info fa-3x"></i></p>

                            <a href="{{route('user-reservations')}}" class="card-link">Go to your reservation</a>
                            <a href="{{asset('/')}}" class="card-link">Make a new one</a>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">You need help <i class="fas fa-info-circle fa-2x text-success"></i></h4>
                            <h6 class="card-subtitle mb-2 text-muted">Contact Us</h6>
                            <p class="card-text">
If you need help with the selected apartment or you need any information, our center is always open, so contact us </p>
                            <a href="{{route('user-contact')}}" class="card-link">Contact Us</a>
                          
                        </div>
                        </div>
                        </div>
                    </div>
                    @else
                    <div class="card-body">
                        <h5 class="card-title">Welcome {{auth()->user()->name}} <i class="fa fa-heart text-danger"></i></h5>
                        <p class="card-text">This is a dashboard for you, we have many suites  for your ..
                            <a href="{{asset('/')}}" class="link">
                                Go to make a new reservation :)
                            </a>
                        </p>
                        
                    </div>
                   
                    @endif
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

