@extends('layout.template')

@section('content')

<div class="container-fluid cont">
      <div class="row">
      @include('renter.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button type="button" class="btn btn-info text-white" onclick="goBack()">
                <i class="fa fa-arrow-left"></i> Back
         </button> &nbsp; You are logged in!</h1>
          </div>
        <div class="row mt-5">
       
        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
        @if($roomscount > 0)
        
        <table class="table">
      
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name of room</th>
                <th scope="col">Square</th>
                <th scope="col">Number of rooms</th>
                <th scope="col">Price for a day</th>
                <th scope="col">View all information about room</th>
                <th scope="col">Add images</th>
                <th scope="col">Delete room</th>
                <th scope="col">Edit room</th>
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
                <td><a href="{{asset('/create-image/'.$r->id)}}" class="btn btn-info"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    <path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/>
                    </svg>&nbsp;Manage Images</a></td>
                <td><a href="{{asset('/delete-room/'.$r->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Yes</a></td>
                <td><a href="{{asset('/edit-room/'.$r->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a></td>
                </tr>
                
              @endforeach
            </tbody>
            </table>
            @else
            <div class="card">
                <div class="card-header">
                    There is no any rooms
                </div>
                <div class="card-body">
                    <h5 class="card-title">For more please insert a new room</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{route('create-room')}}" class="btn btn-primary">Add new room on this link</a>
                </div>
                </div>
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

