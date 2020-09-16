@extends('layout.template')

@section('content')

<div class="container-fluid cont">
      <div class="row border rounded">
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
         
        <div class="col-lg-8">
          
        <div class="card">
            <h5 class="card-header bg-success text-white">New request for reservation</h5>
            <div class="card-body">
                <h2 class="card-title">{{$room->name}}</h2>
                <h6 class="card-subtitle mb-2">
                <img src="{{asset('/')}}img/svg_icon/location.svg" alt="">&nbsp;{{$room->city->country->name}}, {{$room->city->name}} - {{$room->address}}</h6>
                
                <div class="tab-content mt-3">
                    <div class="tab-pane active" id="description" role="tabpanel">
                    <ul>
                        <li>
                            <div class="single_info_doc">
                                <img src="{{asset('/')}}img/svg_icon/square.svg" alt="" class="andjica-icon">
                                <span>{{$room->square}}Sqft</span> &nbsp;&nbsp;
                                <img src="{{asset('/')}}img/svg_icon/bed.svg" alt="" class="andjica-icon">
                                <span>{{$room->beds}}</span>&nbsp;&nbsp;
                                <img src="{{asset('/')}}img/svg_icon/bath.svg" alt="" class="andjica-icon">
                                <span>{{$room->number_of_bath}} Bath</span>&nbsp;&nbsp;
                                    <i class="fa text-danger fa-paw"></i>&nbsp;Pets {{$room->pets}}

                                <span class="badge badge-warning"><span class="amount">From ${{$room->prize}}</span> per night</span>

                            </div>
                        </li>

                    </ul>
                    </div>

                    <div class="tab-pane" id="history" role="tabpanel" aria-labelledby="history-tab">
                    <div class="card-body">
                        <!-- Name -->
                        <h4 class="card-title font-weight-bold">Posted by: {{$room->user->name}}</h4>
                        <hr>
                        <!-- Quotation -->
                        <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos,
                            adipisci</p>
                        </div>
                    </div>

                    <div class="tab-pane" id="deals" role="tabpanel" aria-labelledby="deals-tab">
                    <p class="card-text">Immerse yourself in the colours, aromas and traditions of Emilia-Romagna with a holiday in Bologna, and discover the city's rich artistic heritage.</p>
                    <a href="#" class="btn btn-danger btn-sm">Get Deals</a>
                    </div>
                </div>
                <hr>
                @isset($reservation)
                <div class="tab-pane active bg-light" id="description" role="tabpanel">
                
                <p class="text-left">    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg>
                                <span>First  name: {{$reservation->name}} <br>
                                       Last name:  {{$reservation->lastname}}
                                </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-suit-diamond-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.45 7.4L7.2 1.067a1 1 0 0 1 1.6 0L13.55 7.4a1 1 0 0 1 0 1.2L8.8 14.933a1 1 0 0 1-1.6 0L2.45 8.6a1 1 0 0 1 0-1.2z"/>
                                </svg>
                                <span>  Purpose of reniting: {{$reservation->purposeOfRenting}}</span>&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-wrench" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z"/>
                                </svg><span>&nbsp;Business:{{$reservation->role}}</span></p>
                    </div><Br>
                    <b>Number of people:</b> {{$reservation->numberOfPeople}}<Br><Br>
                    Start date: {{$reservation->start_date}}<Br>
                    Valid until: {{$reservation->valid_until}}<Br>
                    Number of days: {{$reservation->number_of_days}}
                    <hr>
                    <div class="bg-light p-2">
                    <h5>Price for a day {{$room->prize}}</h5>
                    <h6>Number of day {{$reservation->number_of_days}}</h6>
                    <h5 class="text-right">Total {{$reservation->total_price}},00</h5>
                    </div>
                    <hr>
                    <a href="{{asset('/accept-res/'.$reservation->id)}}" class="btn btn-success btn-lg float-right mr-2"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>&nbsp;Confirm reservation</a>
                    <a href="{{asset('/on-pending/'.$reservation->id)}}" class="btn btn-warning btn-lg float-right mr-2">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hourglass-split" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13s-.866-1.299-3-1.48V8.35z"/>
                    </svg>&nbsp;Stay on pending</a>
                   
                    <a href="{{asset('/drop-res/'.$reservation->id)}}" class="btn btn-danger btn-lg float-right mr-2">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.854 4.854a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
                    </svg> &nbsp;Drop reservation</a>
                    @endisset
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          <div class="panel-body" >

              {!! $calendar->calendar() !!}

              {!! $calendar->script() !!}
              
              
              
          </div></div>
       </main>
        
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

