@extends('layout.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('This is email from user') }} 
                {{$userinfo['firstname']}} &nbsp; {{$userinfo['lastname']}}</div>

                <div class="card-body">
                  
                        <div class="alert alert-success" role="alert">
                            {{ __('Thank you for making reservation.') }} for {{$userinfo['roomsname']}}
                        </div>
                  


            <p>Invoice include this information:</p>
            <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Name of hotel / apartament / room:</h6>
                <small class="text-muted"><h4>{{$userinfo['roomsname']}}</h4></small>
              </div>
              <span class="text-muted"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Check in</h6>
                <small class="text-muted"></small>
              </div>
              <span class="text-muted">{{$userinfo['startdate']}}&nbsp; <svg width="1em" height="1em" viewBox="0 0 16 16" class="text-success bi bi-calendar-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                </svg></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Check out </h6>
                <small class="text-muted"></small>
              </div>
              <span class="text-muted">{{$userinfo['validuntil']}}&nbsp; <svg width="1em" height="1em" viewBox="0 0 16 16" class="text-danger bi bi-calendar-event-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM0 5h16v9a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5zm12.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                    </svg></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Number of days:</h6>
                <small class="text-muted"></small>
              </div>
              <span class="text-muted">{{$userinfo['days']}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Price for a day</h6>
                <small></small>
              </div>
              <span class="text-success">{{$userinfo['price']}} </span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>${{$userinfo['totalprice']}}</strong>
            </li>
          </ul>

       
            </div>
        </div>
    </div>
</div>
@endsection
