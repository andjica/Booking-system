@extends('layout.template')

@section('content')

    @include('components.support')
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