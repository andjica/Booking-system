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

                    <button type="button" class="btn btn-info text-white" onclick="goBack()">
                <i class="fa fa-arrow-left"></i> Back
         </button> &nbsp; You are logged in!</h1>
          </div>
        <div class="row justify-content-center mt-5">
                <div class="col-md-8  p-4 rounded border shadow-lg">
                {{--  @if($account == 1 && auth()->user()->account->account_type_id == 1)
                    @if($count >= 3)
                        @include('components.card-payment')
                    @else
    	                @include('renter.form')
                    @endif
                @elseif($account == 2 && auth()->user()->account->account_type_id == 2)
                    @if($count >= 5)
                        @include('components.card-payment')
                    @else
    	                @include('renter.form')
                    @endif
                @elseif($account == 3)
                    @include('renter.form')
                @endif --}}
                @include('renter.form')
               
                @if(session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                @endif
                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
            </div>
            <div class="col-lg-3">
            @if($count > 0)
             @isset($r)
            <div class="card text-left">
                    <div class="card-header ">
                    <i class="fa fa-home fa-3x text-danger"></i>
                    Your last inserted room {{$r->created_at->format('d-m-Y')}}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$r->name}}</h5>
                        <p class="card-text">{{$r->description}}<br>
                            Number of rooms: {{$r->number_of_rooms}}<br>
                            Square: {{$r->square}}㎡ <Br>
                            Price for a day: {{$r->prize}}<br>
                            Address: {{$r->address}}
                        </p>
                        <a href="{{asset('room/'.$r->id)}}" class="btn btn-info">See this room</a><Br><br>
                        <a href="{{asset('/create-image/'.$r->id)}}" class="btn btn-primary">Add images for this apartament <i class="fa fa-plus-square text-warning"></i></a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                    </div>
            @endisset
            @else
            @endif
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

     .mora{   width: 220px;
                    z-index: 10001020;
                    position: relative;
                    top: 36px;"
    }

    .andjica-select{
        height: 35px !important;
        margin-top: 44px !important;
    }
    </style>
@endsection

