@foreach($images as $im)
    <img src="{{asset('./image/'.$im->url)}}">
@endforeach