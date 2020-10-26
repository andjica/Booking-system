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
        <div class="row justify-content-center mt-5 pb-5 border-bottom">
        <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Company name</th>
                    <th scope="col">Name of employeed</th>
                    <th scope="col">Telephone numm</th>
                    <th scope="col">Iban</th>
                    <th scope="col">Address</th>
                    <th scope="col">Nummber of rooms</th>
                    <th scope="col">View rooms </th>
                    <th scope="col">View booked rooms </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($renters as $r)
                    <tr>
                        <th scope="row">{{$r->id}}</th>
                        <td>{{$r->company_name}}</td>
                        <td>{{$r->user->name}}</td>
                        <td>{{$r->telephone_num}}</td>
                        <td>{{$r->iban}}</td>
                        <td>{{$r->address}},<br> {{$r->city->name}}&nbsp;{{$r->city->country->name}}</td>
                    </tr> 
                    @endforeach
                </tbody>
                </table>
                </div>
                </div>
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

