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
    <div class="single_slider d-flex align-items-center slider_bg_1">
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
 
    
<section class="counters2 counters" id="counters2-2">
<div class="container pt-4 mt-5">
    <div class="row">
        <div class="col-lg-4 bg-dark">
       
            <img src="{{asset('/')}}img/logic.png" alt="world media crew location" class="img-fluid mt-5">
           
        </div>
        <div class="col-lg-8 mb-5 border-top border-right">
            <h3 class="mt-5">
            About WMC Locations
            </h3>
            <h4 class="text-muted mb-5">World Media Crew is an international organization connecting all professionals in the area of Media to provide those in need essential and necessary solutions&nbsp;</h4>
            
        </div>
        
        <div class="cards-block">
            <div class="row m-0">
                <div class="card px-3 align-left col-12 col-md-6  text-center">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <h3 class="py-3  display-2">
                            <i class="fas fa-smile-wink text-info"></i></h3>
                        </div>
                        <div class="card-text">
                       
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                Lessons</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">
                            World Media Crew is committed to building an environment where professionals are feeling welcome to help out others in the field of media or finding others to help them out. 
                            </p>
                            <div class="col">
                         
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card px-3 align-left col-12 col-md-6 text-center">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <h3 class="py-3 display-2">
                            <i class="fas fa-smile-beam text-warning"></i></h3>
                        </div>
                        <div class="card-text">
                           
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                Happy feeling</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">
                            As an organization that connects media professionals from all over the world, we feel we can do more by facilitating more solutions to everyday media-related problems.&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="card px-3 align-left col-12 col-md-6 text-center">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <h3 class="py-3 display-2">
                            <i class="fas fa-thumbtack text-success"></i>
                           </h3>
                        </div>
                        <div class="card-text">
                           
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                Search for location</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">
                            Searching for locations can be a time-consuming task and therefore we have created our WMC Locations booking system where we can connect those who want to rent their locations to those who are searching for a location.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="card px-3 align-left col-12 col-md-6 text-center">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <h3 class="py-3 display-2">
                            <i class="fas fa-question-circle text-muted"></i>
                            </h3>
                        </div>
                        <div class="card-texts">
                                
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                What we offer</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">
                            World Media Crew Locations offers people and organizations a platform where they can create a passive income for themselves. With renting out your locations we offer you the ease of our platform, the possibility of an extra income, and with that also publicity. 

                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
    @include('components.action-area')
    <!-- /contact_action_area  -->
<script>
(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
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