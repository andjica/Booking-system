@extends('layout.template')

@section('content')

<div class="container-fluid cont">
      <div class="row">
      @include('renter.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">@if(session('success'))
                <div class="alert alert-success">
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
                This week
              </button>
            </div>
          </div>
          <h3><i class="fa fa-check fa-2x text-success"></i>Your acceptable reservations </h3><br>
        <div class="row">
        
            @foreach($res2 as $re2)
            <div class="col-lg-3 mt-2">
            <div class="card">
            <div class="card-header bg-success text-white">
                    Create at: {{$re2->created_at}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$re2->room->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">ID Reservations: {{$re2->id}}</h6>
                    <p class="card-text">Name of booker: {{$re2->user->name}}</p>
                    <h6 class="card-subtitle mb-2 text-muted"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 1h5v1H4a1 1 0 0 0-1 1H2a2 2 0 0 1 2-2zm10 7v5a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1zM2 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2z"/>
                    <path fill-rule="evenodd" d="M15.854 2.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 4.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    </svg>Check IN: {{$re2->start_date}}</h6>
                </div>
                <div class="card-footer bg-light">
                    <a href="{{asset('/view-res/'.$re2->id)}}" class="card-link btn btn-primary">View more about this reservation</a>
                    </div>
                </div>
                </div>
            @endforeach
            
        </div>
        <hr>
        <h3><i class="fa fa-trash text-danger fa-2x"></i>Your droped reservations</h3><br>
        <div class="row bg-dark pt-3 pb-3">
        @foreach($res3 as $re3)
        <div class="col-lg-3 mt-2">
            <div class="card">
            <div class="card-header bg-danger text-white">
                    Create at: {{$re3->created_at}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$re3->room->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">ID Reservations: {{$re3->id}}</h6>
                    <p class="card-text">Name of booker: {{$re3->user->name}}</p>
                    <h6 class="card-subtitle mb-2 text-muted"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 1h5v1H4a1 1 0 0 0-1 1H2a2 2 0 0 1 2-2zm10 7v5a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1zM2 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2z"/>
                    <path fill-rule="evenodd" d="M15.854 2.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 4.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    </svg>Check IN: {{$re3->start_date}}</h6>
                </div>
                <div class="card-footer bg-light">
                    <a href="{{asset('/view-res/'.$re3->id)}}" class="card-link btn btn-info">View more</a>
                    <a href="{{asset('/accept-res/'.$re3->id)}}" class="card-link btn btn-primary">Accept reservation</a>
                    </div>
                </div>
                </div>
            @endforeach
            
        </div>
        <hr>
        <h3><i class="fa fa-hourglass-start text-warning fa-2x"></i>Rservation on panding</h3><br>
        <div class="row">
        @foreach($res1 as $re1)
        <div class="col-lg-3 mt-2">
            <div class="card">
            <div class="card-header bg-warning text-white">
                    Create at: {{$re1->created_at}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$re1->room->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">ID Reservations: {{$re1->id}}</h6>
                    <p class="card-text">Name of booker: {{$re1->user->name}}</p>
                    <h6 class="card-subtitle mb-2 text-muted"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 1h5v1H4a1 1 0 0 0-1 1H2a2 2 0 0 1 2-2zm10 7v5a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1zM2 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2z"/>
                    <path fill-rule="evenodd" d="M15.854 2.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 4.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    </svg>Check IN: {{$re1->start_date}}</h6>
                </div>
                <div class="card-footer bg-light">
                    <a href="{{asset('/view-res/'.$re1->id)}}" class="card-link btn btn-info">View more</a>
                    <a href="{{asset('/accept-res/'.$re1->id)}}" class="card-link btn btn-info">Accept</a>
                    <a href="{{asset('/drop-res/'.$re1->id)}}" class="card-link btn btn-danger">Drop</a>
                    </div>
                </div>
                </div>
            @endforeach
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

