@extends('layout.template')

@section('content')

<div class="container-fluid cont">
      <div class="row">
      @include('admin.sidebar')

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>@if(session('success'))
                <div class="alert alert-warning">
                    {{session('success')}}
                </div>
                @endif

                    Your partnership</h2>
         
          </div>
          
        <div class="row mt-5 pb-5 border">
        <p class="text-dark m-2">Search Renter</p> &nbsp;  
        <input class="form-control m-2" id="myInput" type="text" placeholder="Search.." style="width:400px;"><br><br><br>
        <small class="text-muted">(you can search by company name, name of user, email address)</small>
        <table class="table table-striped text-center">
                <thead class="bg-light">
                    <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Company <Br>name</th>
                    <th scope="col">Name of <br>employees</th>
                    <th scope="col">Email</th>
                    <th scope="col">Iban</th>
                    <th scope="col">Address</th>
                    <th scope="col">Number of  <br>created Locations</th>
                    <th scope="col">Number of <br>succeessfull<br> booked reservation </th>
                    <th scope="col"><i class="fas fa-hammer"></i> &nbsp;Manage </th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($renters as $r)
                    <tr>
                        <th scope="row">{{$r->id}}</th>
                        <td><a href="{{asset('/admin-renter/'.$r->id)}}" class="text-info">{{$r->company_name}}</a></td>
                        <td>{{$r->user->name}}</td>
                        <td>{{$r->user->email}}</td>
                        <td>{{$r->iban}}</td>
                        <td>{{$r->address}},<br> {{$r->city->name}}&nbsp;{{$r->city->country->name}}</td>
                        <td><span class="badge badge-warning">{{ \App\Room::where('user_id', $r->user_id)->count()}}</span></td>
                        <td><span class="badge badge-light">{{ \App\Reservation::where('renter_id', $r->user_id)->where('confirmed', 2)->count()}}</span></td>
                        <td><a href="{{asset('/admin-renter/'.$r->id)}}" class="text-danger">View</a></td>
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

