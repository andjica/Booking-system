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

                    Successfully booked rooms and total sum</h2>
         
          </div>
          
        <div class="row mt-5 pb-5 border">
        <p class="text-dark m-2">Search Inovice</p> &nbsp;  
        <input class="form-control m-2" id="myInput" type="text" placeholder="Search.." style="width:400px;"><br><br><br>
        <small class="text-muted">(you can search by company name, room name, first name, last name)</small>
        <table class="table table-striped  table-bordered">
                <thead class="bg-light">
                    <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Created at</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Room name</th>
                    <th scope="col">Check in &nbsp;<i class="far fa-calendar-check text-warning"></i></th>
                    <th scope="col">Check out &nbsp; <i class="fas fa-calendar-check text-warning"></i></th>
                    <th scope="col">Number of days</th>
                    <th scope="col">Name of hotel/corporation/company</th>
                    <th scope="col">Iban of hotel/corporation/company</th>
                    <th scope="col">Total sum <br> withouth stripe excange</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($res2 as $r)
                    <tr>
                        <th scope="row">{{$r->id}}</th>
                        <td><small>{{$r->created_at->format('d-m-Y')}}</small></td>
                        <td>{{$r->name}}</td>
                        <td>{{$r->lastname}}</td>
                        <td>{{$r->room->name}}</td>
                        <td>{{$r->start_date}}</td>
                        <td>{{$r->valid_until}}</td> 
                        <td>{{$r->number_of_days}}</td>
                        <td>{{$r->room->user->renter->company_name}}</td>
                        <td>{{$r->room->user->renter->iban}}</td>
                        <td>{{$r->total_price}},00&nbsp;</td>
                        <td></td>
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

