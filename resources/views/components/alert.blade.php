@if($errors->any())
    @foreach($errors->all() as $er)
        <div class="alert alert-danger">{{$er}}</div>
    @endforeach
@endif

@if(session('message'))
  <div class="alert alert-success">
    {{session('message')}}
  </div>
@endif

