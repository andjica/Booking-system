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
            <div class="col-md-1"></div>
            <div class="col-md-8  p-4 rounded border shadow-lg">
            @isset($room)
            <form action="{{asset('/update-room/'.$room->id)}}" method="POST">
                <h4>Update / {{$room->name}} with id #{{$room->id}}, <p>posted on {{$room->created_at}}</p></h4>
                @csrf
                <Br>
                <div class="row bg-light p-3">
                    <div class="col">
                    <label for="roomname">Name of room</label>
                    <input type="text" class="form-control" value="{{$room->name}}" id="roomname" name="title" placeholder="Alexandar Room star">
                    @if ($errors->has('title'))  <p style="color:red;">{{$errors->first('title')}}</p> @endif
                    </div>
                    <div class="col">
                    <label for="roomname">&euro; &nbsp;Price for a day</label>
                    <input type="text" class="form-control" id="price" value="{{$room->prize}}" name="price" placeholder="35">
                    @if ($errors->has('price'))  <p style="color:red;">{{$errors->first('price')}}</p> @endif
                    </div>
                    <div class="col">
                    <label for="category"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
                        <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        </svg> Category</label>
                       <select name="category" class="form-control">
                            <option value="{{$room->category->id}}" class="form-control">{{$room->category->name}}</option>
                            @foreach($categories as $ca)
                            <option value="{{$ca->id}}" class="form-control">{{$ca->name}}</option>
                            @endforeach
                       </select>
                       @if ($errors->has('category'))  <p style="color:red;">{{$errors->first('category')}}</p> @endif
                    </div>
                </div>
                <br> <br> 
                <div class="row bg-light p-3">
                    <div class="col">
                    <div class="form-group">
                        <label for="desc1">Medium Description of room</label>
                            <textarea class="form-control" name="desc1" >{{$room->description_one}}</textarea>
                            @if ($errors->has('desc1'))  <p style="color:red;">{{$errors->first('desc1')}}</p> @endif
                        </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                        <label for="desc2">More Description of room</label>
                            <textarea class="form-control" name="desc2">{{$room->description_two}}</textarea>
                            @if ($errors->has('desc2'))  <p style="color:red;">{{$errors->first('desc2')}}</p> @endif
                        </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                        <label for="desc3">More Description of room</label>
                            <textarea class="form-control" name="desc3">{{$room->description_tree}}</textarea>
                            @if ($errors->has('desc3'))  <p style="color:red;">{{$errors->first('desc3')}}</p> @endif
                        </div>
                    </div>
                </div>
                <br> <br> 
               
                <div class="row bg-light p-3">
                    <div class="col">
                        <label for="roomname">Number of rooms</label>
                        <input type="text" class="form-control" id="number" name="number" value="{{$room->number_of_rooms}}">
                        @if ($errors->has('number'))  <p style="color:red;">{{$errors->first('number')}}</p> @endif
                    </div>
                    <div class="col">
                        <label for="bath"><i class="fa fa-bath text-info"></i>Number of bath</label>
                        <input type="text" class="form-control" id="number" name="numberbath" value="{{$room->number_of_bath}}">
                        @if ($errors->has('numberbath'))  <p style="color:red;">{{$errors->first('numberbath')}}</p> @endif
                    </div>
                    <div class="col">
                    <label for="beds"><i class="fa text-warning fa-bed"></i> Beds</label>
                       <select name="beds" class="form-control">
                            <option value="{{$room->beds}}" class="form-control">{{$room->beds}}</option>
                            <option value="one bed" class="form-control">0</option>
                            <option value="1" class="form-control">1</option>
                            <option value="2" class="form-control">2</option>
                            <option value="3" class="form-control">3</option>
                            <option value="4" class="form-control">4</option>
                            <option value="5" class="form-control">5</option>
                            <option value="5" class="form-control">5+</option>
                       </select>
                       @if ($errors->has('beds'))  <p style="color:red;">{{$errors->first('beds')}}</p> @endif
                    </div>
                </div> 
                <br> <br> 
                <div class="row bg-light p-3">
                    <div class="col">
                    <label for="roomname">Square</label>
                        <input type="text" class="form-control" id="square" name="square" value="{{$room->square}}">
                        @if ($errors->has('square'))  <p style="color:red;">{{$errors->first('square')}}</p> @endif
                    </div>
                    <div class="col">
                    <label for="pets"> <i class="fa text-primary fa-paw"></i> Pets / yes or no</label>
                        <select name="pets" class="form-control">
                            <option value="{{$room->pets}}" class="form-control">{{$room->pets}}</option>
                            <option value="YES" class="form-control">Yes</option>
                            <option value="NO" class="form-control">No</option>
                       </select>
                       @if ($errors->has('pets'))  <p style="color:red;">{{$errors->first('pets')}}</p> @endif
                       </div>
                </div>
                <br> <br>
                <div class="row bg-light p-3">
                    <div class="col">
                        <label for="roomname">Address of hotel or rooms or apartament</label>
                            <input type="text" class="form-control" id="add" name="add" value="{{$room->address}}">
                            @if ($errors->has('add'))  <p style="color:red;">{{$errors->first('add')}}</p> @endif
                        </div>
              <div class="col">
                        <label for="roomname">Address of hotel or rooms or apartament</label>
                        <select  class="form-control border-warning bg-light andjicasel" id="sel_depart" name="country">   
                        <option value="{{$room->city_id}}" class="form-control">{{$room->city->country->name}}, {{$room->city->name}}</option>                         
                                @foreach($countries as $c)
                                    <option value="{{$c->id}}" class="form-control">{{$c->name}}</option>
                                @endforeach
                        </select>
                        @if ($errors->has('country'))  <p style="color:red;">{{$errors->first('country')}}</p> @endif
                   </div>
                    <div class="col" id="selectsub">
                    
                    <p class="text-warning" id="pandjica"><p>
                    <p class="text-danger" id="cat-mistake"></p>
                    </div>
                </div><br>
                <input type="submit" name="submit" class="btn btn-success btn-lg btn-block" value="Update">
                
                </form>
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

     .mora{   width: 220px;
                    z-index: 10001020;
                    position: relative;
                    top: 36px;"
    }

    .andjica-select{
        height: 35px !important;
        margin-top: 44px !important;
    }
    </style>
@endsection

