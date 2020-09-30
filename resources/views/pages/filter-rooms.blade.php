@extends('layout.template')

@section('content')
<!-- Filter -->
<div class="slider_area">
<div class="single_slider  d-flex align-items-center slider_bg_1">
<div class="container">
<div class="row align-items-center">
    <div class="col-xl-12 lign-items-center " >
        <div class="slider_text text-center justify-content-center">
            <p class="mt-5" style="padding-top:100px;">Find here your Shoot & Film location</p>
        </div>
            <div class="property_form">
               
                    <div class="row">
                        <div class="col-xl-12 justify-content-center">
                            @include('components.search')
                        </div>
                    </div>
                
            </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    @if($countrooms == 0)
    <div class="container">
        <div class="row">
        <div class="col-lg-12 justify-content-center">
            <div class="alert alert-danger mt-5 p-4">
               <h4> Sorry, there is no result in category @isset($categoryname) {{$categoryname->name}}
                @endisset from @isset($cityname) {{$cityname->name}} @endisset, try another filter sort </h4>
            </div>
        </div>
    </div>
    </div>
    @else
<!-- end filter  -->
<div class="popular_property">
        <div class="container mt-5">
           
 
            <div class="row">
            @foreach($rooms as $room)
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    For Rent
                            </div>
                            @foreach($room->image as $img)
                                @if ($loop->first)
                                    <img src="{{asset('/image/'.$img->url)}}" alt="{{$room->name}}" height="234px">
                                @endif
                            @endforeach
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <h3><a href="{{asset('/room/'.$room->id)}}">{{$room->name}}</a></h3>
                                    <div class="mark_pro">
                                    
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>{{$room->city->country->name}} - {{$room->city->name}},{{$room->address}}</span>
                                    </div>
                                    per Day: <span class="amount">for ${{$room->prize}}</span> 
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>{{$room->square}}Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>{{$room->beds}}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>{{$room->number_of_bath}} Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                @endforeach
                <!-- ovde -->
                <ul class="list-group">
                <li class="list-group">  {{$rooms->links()}}</li>
                </ul>
            </div>
            @endif
            </div>
            </div>
@endsection

@section('css')

<style>

.andjica-single
{
    background: rgba(0, 0, 0, .55);
    padding:20px;
    border-radius:10px;
}
.andjica-card
{
    margin-top:20px;
    border-radius:10px;
}
.slider_bg_1 {
  background-image: url('http://localhost/res/public/img/property/andjica.jpg');
}
@media (max-width: 768px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* display 3 */
@media (min-width: 768px) {
    
    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(33.333%);
    }
    
    .carousel-inner .carousel-item-left.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-33.333%);
    }
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
}



.slider_area .single_slider
{
    height:500px;
}
</style>
@endsection
