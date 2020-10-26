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
        <table class="table table-striped">
                <thead class="bg-light">
                    <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($users as $r)
                    <tr>
                        <th scope="row">{{$r->id}}</th>
                        <td>{{$r->name}}</td>
                        <td>{{$r->email}}</td>
                        <td>{{$r->role->name}}</td>
                       
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

