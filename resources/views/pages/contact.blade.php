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
.slider_area .single_slider{
    height:400px;
}
</style>
@endsection
@section('content')
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-xl-12 lign-items-center mt-5">
        <div class="slider_text text-center justify-content-center mt-5 pt-5">
            <h3><i class="fa fa-map-marker-alt text-info"></i>Find your best Property</h3>
            <p>Do you have questions&nbsp;<i class="fas fa-question text-warning"></i>&nbsp;Contact our Team for more information</p>
        </div>
            
                            </div>
                        </div>
                    </div>
                </div>
    </div>
 
    
    <section class="ftco-section">
			<div class="container">
				<div class="row mt-5 pt-5">
                <div class="col-md-4 text-center mt-2 bg-light">
                <ul class="list-unstyled mb-0 mt-5">
                    <li><i class="fa fa-map-marker-alt fa-2x text-info"></i>
                        <p>World Media Crew Locations</p>
                    </li>

                    <li><i class="fa fa-whatsapp mt-4 fa-2x text-info"></i>
                        <p>+31 6 42213877 </p>
                    </li>

                    <li><i class="fa fa-envelope mt-4 fa-2x text-info"></i>
                        <p>info@worldmediacrew.com</p>
                    </li>
                </ul>
                </div>
                
				<div class="col-md-8 mb-md-0 mb-5 p-3 float-right">
                <div class="panel-heading display-table border-warning mb-5">
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" ></h3>
                        <div class="display-td" >                            
                            <img class="img-fluid pull-right" width="250px" src="{{asset('/img/')}}/logo2.png">
                        </div>
                    </div>                    
                </div>
                <form id="contact-form-an" name="contact-form" action="{{route('contact-support')}}" method="POST" class="p-3 shadow-lg"> 
                @csrf
                <!--Grid row-->
                <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                
                    <label for="name" class="">Your name</label>
                        <input type="text" id="name" name="name" value="" class="form-control">
                        <p class="text-danger" id="er-name"></p>
                    </div>
                </div>

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                    
                    <label for="email" class="">Your email</label>

                        <input type="text" id="email" name="email" value="" class="form-control">
                   
                    </div>
                </div>
                <!--Grid column-->
                </div>
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        <label for="subject" class="">Subject</label>

                            <input type="text" id="subject" name="subject" class="form-control" value="">
                            <p class="text-danger" id="er-subject"></p>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                        <label for="message">Your message</label>

                            <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
                            <p class="text-danger" id="er-message"></p>
                        </div>

                    </div>
                </div>
            <!--Grid row-->
            <div class="text-center text-md-left">
            <input type="submit" class="btn btn-primary text-white" value="Send">
        </div>
        </form>

        
                <div class="status"></div>
            </div>
           
				</div>
			</div>
        </section>
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
    <script>
       $(document).ready(function(){
    $('#contact-form-an').submit(function(e){
        
        let name = $('#name').val();
        let ername =  document.getElementById('er-name');

        let subject = $('#subject').val();
        let ersubject = document.getElementById('er-subject');

        
        let message = $('#message').val();
        let ermessage = document.getElementById('er-message');

        let errors = [];

        if(name == "")
        {
          e.preventDefault();
          ername.innerHTML = "Please write your name";
          errors.push = "Mistake";
        }

        if(subject == "")
        {
          e.preventDefault();
          ersubject.innerHTML = "Please enter a subject";
          errors.push = "Mistake";
        }

        if(message == "")
        {
            e.preventDefault();
            ermessage.innerHTML = "Please enter a message";
            errors.push = "Mistake";
        }

        if(errors.length == 0)
        {
           return true;
        }

    });
});
     </script>
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