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
          
        <div class="row mt-5 pb-5 border-bottom">
        <p>Search renter by company name</p>  
        <input class="form-control" id="myInput" type="text" placeholder="Search.."><br><br><br>
        <table class="table table-striped">
                <thead class="bg-light">
                    <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Company name</th>
                    <th scope="col">Name of employeed</th>
                    <th scope="col">Telephone numm</th>
                    <th scope="col">Iban</th>
                    <th scope="col">Address</th>
                    <th scope="col">Nummber of  created rooms</th>
                    <th scope="col">Number of succeessfull<br> booked reservation </th>
                    <th scope="col">Manage </th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($renters as $r)
                    <tr>
                        <th scope="row">{{$r->id}}</th>
                        <td>{{$r->company_name}}</td>
                        <td>{{$r->user->name}}</td>
                        <td>{{$r->telephone_num}}</td>
                        <td>{{$r->iban}}</td>
                        <td>{{$r->address}},<br> {{$r->city->name}}&nbsp;{{$r->city->country->name}}</td>
                        <td>{{ \App\Room::where('user_id', $r->user_id)->count()}}</td>
                        <td>{{ \App\Reservation::where('renter_id', $r->user_id)->where('confirmed', 2)->count()}}</td>
                        <td><a href="{{asset('/admin-renter/'.$r->id)}}">view</a></td>
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

