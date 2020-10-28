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
          <div class="row justify-content-center p-5 bg-light">
           <form class="form-inline" method="GET" action="{{route('search-by-name')}}">
               @csrf
                <input class="form-control m-2" id="myInput" type="text" name="text" placeholder="Search.." style="width:500px;">
                <button type="submit" class="btn btn-info">Search </button>
                
            </form>    
        </div>
        <div class="row justify-content-center bg-light pb-4">
        <small class="text-muted">Search by company name ..</small>
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
                        <p class="card-text">See all invoices</p>
                        <a href="{{route('admin-invoices')}}" class="btn btn-primary">Find invoice</a>
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

