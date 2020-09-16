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

                    You are logged in!</h1>
            
          </div>
        <div class="row mt-5">
                <div class="col-md-10">
                <div class="card text-left">
                    <div class="card-header bg-dark">
                    <i class="fa fa-home fa-3x text-danger"></i>
                    <img src="{{asset('/')}}img/logo3.png" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Welcome {{auth()->user()->name}} <i class="fa fa-heart text-danger"></i></h5>
                        <p class="card-text">This is a dashboard for you, here you can see your reservations..
                            <a href="{{route('user-reservations')}}" class="link">
                                Go to see :)
                            </a>
                        </p>
                        
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

