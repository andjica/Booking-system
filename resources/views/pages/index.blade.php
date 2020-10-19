@extends('layout.template')
@section('css')
<style>
.warper{
    width: 100% !important;
    background: transparent !important;
    color: #C7C7C7 !important;
    font-size: 15px !important;
    font-weight: 400 !important;
    border: 1px solid rgba(255, 255, 255, 0.4) !important;
    height: 45px !important;
    line-height: 45px !important;
}
.select2-container--default .select2-selection--single {
    background-color: transparent !important;
    border: 1px solid #aaa !important;
    border-radius: 4px !important;
    height: 45px !important;
    position: relative !important;
    padding-left: 13px !important;
    line-height: 40px !important;
    padding-top: 7px !important;
    font-size: 17px !important;
    FONT-WEIGHT: 700 !important;
}

.select2-container--open .select2-dropdown--below{
    width: 166px;
    position: relative;
   
    background: transparent;
}
.select2-container--default .select2-search--dropdown .select2-search__field{
    color:white;
}
.select2-results__option{
    color:White;
}
.select2-container--default .select2-search--dropdown .select2-search__field {
    border: 1px solid #aaa;
    background: transparent;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #888 transparent transparent transparent;
    border-style: solid;
    border-width: 8px 4px 0 4px !important;
    height: 0;
    left: 0% !important;
    margin-left: -4px;
    margin-top: -2px;
    position: absolute;
    top: 67% !important;
    width: 0;
}
</style>
@endsection
@section('content')
<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-xl-12 lign-items-center">
        <div class="slider_text text-center justify-content-center">
            <h3><i class="fa fa-map-marker-alt text-info"></i>Find your best Property</h3>
            <p>Find a place for a perfect photo <i class="fa fa-camera text-warning"></i></p>
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
    <!-- slider_area_end -->

    <!-- popular_property  -->
    <div class="popular_property">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>Popular Locations and Apartments</h3>
                    </div>
                </div>
            </div>
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
                                        <span>{{$room->city->country->name}} - {{$room->city->name}},{{$room->address}}</span><br><br>
                                        {{$room->category->name}}
                                    </div>
                                   <span class="amount"> Per Day : ${{$room->prize}}</span> 
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
                
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="more_property_btn text-center">
                        <a href="{{route('all')}}" class="boxed-btn3-line">More Properties</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /popular_property  -->
    
    <!-- home_details  -->
<div class="home_details">
<div class="container">
<div class="row">   
    <div class="col-xl-12">
        <div class="home_details_active owl-carousel">
        @foreach($sprooms as $r)
        <div class="single_details andjica-single">
         <div class="row">
                    <div class="col-xl-7 col-md-7">
                            <div class="modern_home_info">
                                    <div class="modern_home_info_inner">
                                        <span class="for_sale">
                                            For Rent
                                        </span>
                                        <div class="info_header">
                                                <h3>{{$r->name}}</h3>
                                                <div class="popular_pro d-flex">
                                                    <img src="img/svg_icon/location.svg" alt="">
                                                    <span>{{$r->category->name}}&nbsp; - {{$r->city->name}},{{$r->city->country->name}}</span>
                                                </div>
                                        </div>
                                        <div class="info_content">
                                            <ul>
                                                <li> <img src="{{asset('/')}}img/svg_icon/square.svg" alt=""> <span>{{$r->square}} Sqft</span>  </li>
                                                <li> <img src="{{asset('/')}}img/svg_icon/bed.svg" alt=""> <span>{{$r->beds}} Bed</span> </li>
                                                <li> <img src="{{asset('/')}}img/svg_icon/bath.svg" alt=""> <span>{{$r->number_of_bath}} Bath</span> </li>
                                            </ul>
                                            @foreach($r->image as $img)
                                            @if ($loop->last)
                                                <img src="{{asset('/image/'.$img->url)}}" alt="{{$room->name}}" height="200px" class="img-fluid rounded mb-4">
                                            @endif
                                        @endforeach
                                        <br>
                                            <p class="mb-4">{{$r->description_one}}</p>
                                            <div class="prise_view_details d-flex justify-content-between align-items-center mt-3">
                                                <span>${{$r->prize}} by Day</span>
                                                <a class="boxed-btn3-line" href="{{asset('/room/'.$r->id)}}">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="col-xl-5 col-md-5">
                    <div class="card border-warning mb-3 andjica-card" style="max-width: 28rem;">
                        <div class="card-header"><img src="{{asset('/')}}img/logo2.png" class="img-fluid"></div>
                        <div class="card-body text-warning">
                            <h5 class="card-title">Warning card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
</div>
</div>
 
    <div class="team_area">
            <div class="container">
                    <div class="row">
                            <div class="col-xl-12">
                                <div class="section_title mb-40 text-center">
                                    <h3>
                                            Our Partners
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single_team">
                                    <div class="team_thumb">
                                        <img src="img/team/1.png" alt="">
                                        <div class="social_link">
                                                <ul>
                                                    <li><a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h3>Milani Mou</h3>
                                        <p>Business Agent</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single_team">
                                    <div class="team_thumb">
                                        <img src="img/team/2.png" alt="">
                                        <div class="social_link">
                                                <ul>
                                                    <li><a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h3>Halim Yoka</h3>
                                        <p>Business Agent</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single_team">
                                    <div class="team_thumb">
                                        <img src="img/team/3.png" alt="">
                                        <div class="social_link">
                                                <ul>
                                                    <li><a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h3>Dalim Karma</h3>
                                        <p>Business Agent</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single_team">
                                    <div class="team_thumb">
                                        <img src="img/team/4.png" alt="">
                                        <div class="social_link">
                                                <ul>
                                                    <li><a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h3>Micky</h3>
                                        <p>Business Agent</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    <!-- /team_area  -->
    
    <!-- contact_action_area  -->
    <div class="contact_action_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="action_heading">
                        <h3>Add your Location To WMC Locations</h3>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="call_add_action">
                        <span>+316 57880170</span>
                        <a href="{{asset('./home')}}" class="boxed-btn3-line">Add Location Space</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /contact_action_area  -->
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

</style>
@endsection
@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endsection