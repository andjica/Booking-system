@extends('layout.template')
@section('css')

<link rel="stylesheet" href="{{asset('/booker')}}/fonts/linearicons/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
	
        <style>
            .wp
            {
                background:White !important;
            }
            .mt
            {
                margin-top:25px;
			}
			.margin-con
			{
				margin-top:250px;
			}
        </style>
@endsection
@section('content')
	@isset($room)
	<div class="container margin-con">
		<div class="row">
            <div class="col-lg-5">
			{!! $calendar->calendar() !!}

			{!! $calendar->script() !!}
			</div>
		</div>
		</div>
		<div class="wrapper wp">
			<div class="inner">
				<div class="image-holder">
                @foreach($room->image as $img)
                @if ($loop->first)
                <img src="{{asset('/image/'.$img->url)}}" alt="">
                @endif
            @endforeach
					
				<h3 class="text-white  mt">Your reservation for {{$room->name}}</h3>
				</div>
                <div class="container">
                <div class="row">
                    <div class="col-lg-5">
		



					</div>
                <div class="col-lg-8">
            	
			</div>
		</div>
        </div>
        </div>
		</div>	
		
@endisset
		<script src="{{asset('/booker')}}/js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="{{asset('/booker')}}/js/jquery.steps.js"></script>

		<!-- DATE-PICKER -->
		<script src="{{asset('/booker')}}/vendor/date-picker/js/datepicker.js"></script>
		<script src="{{asset('/booker')}}/vendor/date-picker/js/datepicker.en.js"></script>

		<script src="{{asset('/booker')}}/js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
  
@endsection
