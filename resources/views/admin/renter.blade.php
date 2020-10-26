@extends('layout.template')

@section('content')

<div class="container-fluid cont">
      <div class="row">
      @include('admin.sidebar')
      @isset($r)
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">@if(session('success'))
                <div class="alert alert-warning">
                    {{session('success')}}
                </div>
                @endif
                #ID {{$r->id}},
                    {{$r->company_name}}</h1>
                    <h4 class="text-right p-3 text-dark bg-warning rounded">
                        Total earned by WDC platform 
                        <span class="badge badge-secondary"></span></h4>

          </div>
        <div class="row">
           
            <div class="col-lg-6">  
            <div class="card border border-info shadow-lg">
                <div class="card-body">
                    <h3 class="card-title">Renter information <br><h4>Company name:{{$r->company_name}}</h4> <p> from <b>{{$r->address}}, {{$r->city->name}}</b></p></h3>
                    <h4>State: {{$r->city->country->name}}</h4>
                   
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                    Company representative: <p class="text-muted">{{$r->user->name}}</p> <br>Email address: <p class="text-muted">{{$r->user->email}}</p></li>
                    <li class="list-group-item">Iban: <p class="text-muted">{{$r->iban}}</p></li>
                    <li class="list-group-item">Telephone nummber<p class="text-muted">{{$r->telephone_num}}</p> </li>
                </ul>
                <div class="card-body">
                <p class="card-text">Become a memebers from: {{$r->user->created_at}}</p>
                </div>
                </div>
            </div>
            <div class="col-lg-2">
            <div class="card text-white  mb-3" style="max-width: 22rem;">
                <div class="card-header bg-warning"><h5 class="card-title text-light">Number of created rooms</h5></div>
                <div class="card-body">
                    
                    <button type="button" class="btn btn-warning">
                       <span class="badge badge-light">{{ \App\Room::where('user_id', $r->user_id)->count()}}</span>
                        <span class="sr-only">unread messages</span>
                        </button>

                </div>
                </div>
                <div class="card text-white  mb-3" style="max-width: 22rem;">
                <div class="card-header bg-success"><h5 class="card-title text-light">Number of successfully reservation</h5>
                    </div>
                <div class="card-body">
                    
                    <button type="button" class="btn btn-success">
                       <span class="badge badge-light">{{ \App\Reservation::where('renter_id', $r->user_id)->where('confirmed', 2)->count()}}</span>
                        <span class="sr-only">unread messages</span>
                        </button><br>
                      <a href="{{asset('/active-res/'.$r->id)}}">View active reservations</a> 
                </div>
                </div>
                <div class="card text-white  mb-3" style="max-width: 22rem;">
                <div class="card-header bg-danger"><h5 class="card-title text-light">Number of dropped resservation</h5></div>
                <div class="card-body">
                    
                    <button type="button" class="btn btn-danger">
                       <span class="badge badge-danger">{{ \App\Reservation::where('renter_id', $r->user_id)->where('confirmed', 3)->count()}}</span>
                        <span class="sr-only">unread messages</span>
                        </button>

                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn btn-danger btn-lg float-left" data-toggle="modal" data-target="#drop">
                    <i class="fas fa-trash-alt"></i> Delete this renter
                </button>
            </div>
            <div class="modal" tabindex="-1" role="dialog" id="drop">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete renter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are your sure to want do delete this renter {{$r->company_name}}?<br>
                        If you delete this user, you will automatically delete his 
                        existing created rooms as well as entered reservations by other users
                    </p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{asset('/admin-delete-renter/'.$r->id)}}" class="btn btn-danger">Yes</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                    </div>
                </div>
                </div>
            @endisset
        </div>
        <div class="row mt-5 pb-5 border-bottom">
        <p class="p-2">Rooms of @isset($r) {{$r->user->name}} from {{$r->company_name}} @endisset</p>  
        <input class="form-control m-2" id="myInput" type="text" placeholder="Search.."><br><br><br>
        <table class="table">
      
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name of room</th>
                <th scope="col">Square</th>
                <th scope="col">Number of rooms</th>
                <th scope="col">Price for a day</th>
                <th scope="col">View all information about room</th>
           
                </tr>
            </thead>
            <tbody>
            @foreach($rooms as $r)
                <tr>
                <th scope="row">{{$r->id}}</th>
                <td>{{$r->name}}</td>
                <td>{{$r->square}}</td>
                <td>{{$r->number_of_rooms}}</td>
                <td>{{$r->prize}}</td>
                <td><a href="{{asset('/room/'.$r->id)}}" class="btn btn-info"><i class="fa fa-home text-secondary"></i>&nbsp;View more about this room</a></td>
                
                </tr>
                
              @endforeach
            </tbody>
            </table>
                </div>
                </div>
            </div>
        </div>
</div>

<script>
    $(document).ready(function(){

$("#myInput").on("keyup", function() {
 
  var value = $(this).val().toLowerCase();
  $("#myTable tr").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});
});
    </script>
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

