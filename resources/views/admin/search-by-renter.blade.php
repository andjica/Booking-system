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

                <button type="button" class="btn btn-info text-white" onclick="goBack()">
                <i class="fa fa-arrow-left"></i> Back
         </button> &nbsp; Result of search</h1>
          </div>
          
        <div class="row">
            @if($countrenters == 0)
            
                <div class="alert alert-danger m-5">
                    Sorry, there is no result for this name
                </div>
              
            @else
           
            @foreach($renters as $renter)
            <div class="col-lg-5 m-5">
            <div class="card">
            <div class="card-header bg-light text-info">
                    Create at: {{$renter->created_at}}
                </div>
                <div class="card-body">
                    <h3 class="card-title">{{$renter->company_name}}</h3>
                    <h4 class="card-subtitle mb-2 text-muted">Email address: {{$renter->user->email}}</h4>
                    <h4 class="card-text">Role: {{$renter->user->role->name}}</h4>
                    <h6 class="card-subtitle mb-2 text-muted"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 1h5v1H4a1 1 0 0 0-1 1H2a2 2 0 0 1 2-2zm10 7v5a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1zM2 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2z"/>
                    <path fill-rule="evenodd" d="M15.854 2.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 4.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    </svg></h6>
                </div>
                <div class="card-footer bg-light">
                    @if($renter->role_id == 3)
                    
                    
                    @else

                    @endif
                    <td><a href="{{asset('/admin-renter/'.$renter->id)}}" class="btn btn-outline-primary">View more about</a></td>
                    </div>
                </div>
                </div>
            @endforeach
            @endif
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

