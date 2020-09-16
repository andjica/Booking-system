@if(session()->has('user') && session()->get('user')->role_id == 1)
@include('components.header')
@include('components.nav')

<div class="container">
    
    <div class="row mb-5">
        
        <div class="col-lg-3 bg-info">@include('components.sidebar-admin')</div>
        <div class="col-lg-8">
        @include('components.alert')
        <form action="{{url('create-image')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group"><h3>Get your room or apartment and choose a image for it</h3></div>
            <div class="form-group">
                <select name="room" class="form-control">
                    <option value="0">Chose apartment</option>
                    @foreach($rooms as $room)
                    <option value="{{$room->id}}">{{$room->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="file" name="slika" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="row">
    <h2>What We Do</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
        <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
      </div>
    </div>
    </div>
</div>
@include('components.footer')
@endif