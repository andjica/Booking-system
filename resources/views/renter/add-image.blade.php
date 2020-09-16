@extends('layout.template')

@section('content')

<div class="container-fluid cont">
      <div class="row">
      @include('renter.sidebar')
      @isset($r)
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
        <div class="row justify-content-center mt-5">
                <div class="col-md-7">
                <form action="{{route('insert-image')}}" method="POST" enctype="multipart/form-data">
                @csrf
                Add image for  {{$r->name}}
                    <input type="hidden" name="roomid" value="{{$r->id}}">
                @endisset
                <div class="form-group">
                <label for="roomname"></label>
                    <input type="file" class="form-control" name="image[]" multiple>
                    @if ($errors->has('image'))  <p style="color:red;">{{$errors->first('image')}}</p> @endif
                </div>
                
                <input type="submit" name="submit" class="btn btn-warning" value="Insert">
               
                </form><hr>
                <br>
                <a href="{{asset('room/'.$r->id)}}" class="btn btn-info">See this room</a><br>
                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                <br>
                @endif
                @if($countimage > 0)
                <form action="{{asset('/delete-images')}}" class="mt-4" method="post">
                @csrf
                <table class="table table-striped border mt-5">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $img)
                        <tr>
                        <th scope="row">{{$img->id}}</th>
                        <td> <img src="{{asset('/image/'.$img->url)}}" class="img-fluid small"></td>
                        <td><input type="checkbox" name="images[]" class="checkboxes" value="{{ $img->id }}" /></td>
                       </tr>
                        @endforeach
                    </tbody>
                   
                    </table>
                    <input type="submit" class="btn btn-danger btn-lg btn-block" value="Delete checked images">
                   </form>
                  
                @else
                @endif
            </div>
            <div class="col-md-5">
            @isset($r)
            <div class="card text-left">
                    <div class="card-header ">
                    <i class="fa fa-home fa-3x text-danger"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$r->name}}</h5>
                        <p class="card-text">{{$r->description}}<br>
                            Number of rooms: {{$r->number_of_rooms}}<br>
                            Square: {{$r->square}}㎡ <Br>
                            Price for a day: {{$r->prize}}<br>
                            Address: {{$r->address}}
                        </p>
                        <a href="{{asset('/create-image/'.$r->id)}}" class="btn btn-primary">Add images for this apartament <i class="fa fa-plus-square text-warning"></i></a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                    </div>
            @endisset
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
     .small
     {
         margin-top:20px;
         width:200px;
     }
    </style>
@endsection

