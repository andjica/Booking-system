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

                    Your reservations</h1>
           
          </div>
       
            @if($rescount == 0)
            <div class="row mt-5 ml-1">
                <div class="col-md-12">
                <div class="card text-left">
                    <div class="card-header ">
                    <i class="fa fa-home fa-3x text-danger"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">There is no any reservations <i class="fa fa-heart text-danger"></i></h5>
                        <p class="card-text">This is a dashboard for you, here you can insert your rooms.</p>
                        
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                    </div>
                </div>
            </div>
            @else 
            @foreach($reservations as $re)
            <div class="row mt-5 ml-1">
            <div class="col-lg-4 border-top border-left border-bottom">
                    <div class="single_property bg-light p-2">
                        <div class="property_thumb">
                        <h3><a href="{{asset('/room/'.$re->room->id)}}">{{$re->room->name}}</a></h3>
                            @foreach($re->room->image as $img)
                                @if ($loop->first)
                                    <img src="{{asset('/image/'.$img->url)}}" alt="{{$re->name}}" width="250px">
                                @endif
                            @endforeach
                        </div><br>
                        <div class="property_content">
                            <div class="main_pro">
                                    
                                    <div class="mark_pro">
                                    <i class="fa text-danger fa-paw"></i>&nbsp;Pets {{$re->room->pets}}
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>{{$re->room->city->country->name}} - {{$re->room->city->name}},{{$re->room->address}}</span>
                                    </div>
                                    <span class="amount">From ${{$re->room->prize}}</span> per night
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>{{$re->room->square}}Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>{{$re->room->beds}}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>{{$re->room->number_of_bath}} Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="col-lg-5 pt-3 pr-2 border-right border-top border-bottom">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Name of hotel / apartament / room:</h6>
                        <small class="text-muted"><h4>{{$re->room->name}}</h4></small>
                    </div>
                    <span class="text-muted"></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Check in</h6>
                        <small class="text-muted"></small>
                    </div>
                    <span class="text-muted">{{$re->start_date}}&nbsp; <svg width="1em" height="1em" viewBox="0 0 16 16" class="text-success bi bi-calendar-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
                    <span class="text-muted">{{$re->valid_until}}&nbsp; <svg width="1em" height="1em" viewBox="0 0 16 16" class="text-danger bi bi-calendar-event-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM0 5h16v9a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5zm12.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                            </svg></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Number of days:</h6>
                        <small class="text-muted"></small>
                    </div>
                    <span class="text-muted">{{$re->number_of_days}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Price for a day</h6>
                        <small>{{$re->room->prize}}</small>
                    </div>
                    <span class="text-success"></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>${{$re->total_price}}</strong>
                    </li>
                </ul>
                Posted on: {{$re->created_at}}
                </div>
               
                </div>
                
                @endforeach
                <ul class="list-group">
                <li class="list-group">  {{$reservations->links()}}</li>
                </ul> <br><br>
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

