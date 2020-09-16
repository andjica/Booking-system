@extends('layout.template')

@section('content')

<div class="container cont-marg">

    <div class="row">

    @include('components.room-id')
    @if(session('error'))
      <div class="alert alert-danger">
           {{session('error')}}
       </div>
                        @endif
      
    </div>
</div>
<div class="container-fluid px-1 px-md-4 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-11 col-lg-10 col-xl-9">
        @if(auth()->user())
                @include('user.create-reservation')
              @else
              <a href="{{asset('login')}}" class="btn btn-info">Make a Reservation</a>
              @endif
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @include('components.room')
    </div>
    
    </div>
</div>

@endsection


@section('css')
    <style>
        .cont-marg
        {
            margin-top:200px;
        }
        .card0 {
    background-color: #F5F5F5;
    border-radius: 8px;
    z-index: 0
}

.card00 {
    z-index: 0
}

.card1 {
    margin-left: 80px;
    z-index: 0;
    border-right: 1px solid #F5F5F5
}

.card2 {
    display: none
}

.card2.show {
    display: block
}

.social {
    border-radius: 50%;
    background-color: #FFCDD2;
    color: #E53935;
    height: 47px;
    width: 47px;
    padding-top: 16px;
    cursor: pointer
}

input,
select {
    padding: 2px;
    border-radius: 0px;
    box-sizing: border-box;
    color: #9E9E9E;
    border: 1px solid #BDBDBD;
    font-size: 16px;
    letter-spacing: 1px;
    height: 50px !important
}

select {
    width: 100%;
    margin-bottom: 85px
}

input:focus,
select:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid orange !important;
    outline-width: 0 !important
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
    background-color: orange
}

.form-group {
    position: relative;
    margin-bottom: 1.5rem;
    width: 77%
}

.form-control-placeholder {
    position: absolute;
    top: 0px;
    padding: 12px 2px 0 2px;
    transition: all 300ms;
    opacity: 0.5
}

.form-control:focus+.form-control-placeholder,
.form-control:valid+.form-control-placeholder {
    font-size: 95%;
    top: 10px;
    transform: translate3d(0, -100%, 0);
    opacity: 1;
    background-color: #fff
}

.next-button {
    width: 18%;
    height: 50px;
    background-color: #286090;
    color: #fff;
    border-radius: 6px;
    padding: 10px;
    cursor: pointer
}

.next-button:hover {
    background-color: #E53935;
    color: #fff
}

.get-bonus {
    margin-left: 154px
}

.pic {
    width: 230px;
    height: 110px
}

#progressbar {
    position: absolute;
    left: 35px;
    overflow: hidden;
    color: #E53935
}

#progressbar li {
    list-style-type: none;
    font-size: 8px;
    font-weight: 400;
    margin-bottom: 36px
}

#progressbar li:nth-child(3) {
    margin-bottom: 88px
}

#progressbar .step0:before {
    content: "";
    color: #fff
}

#progressbar li:before {
    width: 30px;
    height: 30px;
    line-height: 30px;
    display: block;
    font-size: 20px;
    background: #fff;
    border: 2px solid orange;
    border-radius: 50%;
    margin: auto
}

#progressbar li:last-child:before {
    width: 40px;
    height: 40px
}

#progressbar li:after {
    content: '';
    width: 3px;
    height: 66px;
    background: #BDBDBD;
    position: absolute;
    left: 58px;
    top: 15px;
    z-index: -1
}

#progressbar li:last-child:after {
    top: 147px;
    height: 132px
}

#progressbar li:nth-child(3):after {
    top: 81px
}

#progressbar li:nth-child(2):after {
    top: 0px
}

#progressbar li:first-child:after {
    position: absolute;
    top: -81px
}

#progressbar li.active:after {
    background: orange
}

#progressbar li.active:before {
    background: orange;
    font-family: FontAwesome;
    content: "\f00c"
}

.tick {
    width: 100px;
    height: 100px
}

.prev {
    display: block;
    position: absolute;
    left: 40px;
    top: 20px;
    cursor: pointer
}

.prev:hover {
    color: #D50000 !important
}

@media screen and (max-width: 912px) {
    .card00 {
        padding-top: 30px
    }

    .card1 {
        border: none;
        margin-left: 50px
    }

    .card2 {
        border-bottom: 1px solid #F5F5F5;
        margin-bottom: 25px
    }

    .social {
        height: 30px;
        width: 30px;
        font-size: 15px;
        padding-top: 8px;
        margin-top: 7px
    }

    .get-bonus {
        margin-top: 40px !important;
        margin-left: 75px
    }

    #progressbar {
        left: -25px
    }
}
.style-back
{
    background-image: url('http://localhost/projekat5/public/image/map.jpg'); background-size: cover;
    background-position: center;
}

@media screen and (min-width:968px){
    .andjica{
        margin-bottom: 34px !important;

    }

    .andjica3{
        margin-top: 48px;
    }
}
.andjica-tab
{
    width:100%;
}
.andjica-icon
{
    width:30px;
    height:30px;
}
.badge-warning
{
    background:orange !important;
}

.blueimp-gallery .modal-body {
	position: relative;
	text-align: center;
	padding: 0 0 56.25% 0;
	overflow: hidden;
	cursor: pointer;
}
.blueimp-gallery .modal-footer {
	margin: 0;
}
.blueimp-gallery .modal-body img,
.blueimp-gallery .modal-body .video-content video,
.blueimp-gallery .modal-body .video-content iframe,
.blueimp-gallery .modal-body .video-content a {
	max-width: 100%;
	max-height: 100%;
	margin: auto;
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
}
.blueimp-gallery .modal-body .video-content video {
 	display: none;
}
.blueimp-gallery .modal-body .video-playing video {
	display: block;
}
.blueimp-gallery .modal-body .video-content iframe {
	width: 100%;
	height: 100%;
	border: none;
	left: 100%;
}
.blueimp-gallery .modal-body .video-playing iframe {
	left: 0;
}
.blueimp-gallery .modal-body .video-playing img,
.blueimp-gallery .modal-body .video-playing a {
 	display: none;
}
.blueimp-gallery .modal-body .video-content a {
	cursor: pointer;
}
.blueimp-gallery .modal-body .video-content a:after {
	font-family: "Glyphicons Halflings";
	-webkit-font-smoothing: antialiased;
	content: "\e029";
	font-size: 64px;
	line-height: 64px;
	width: 64px;
	height: 64px;
	position: absolute;
	top: 50%;
	margin: -32px 0 0 -32px;
}
.blueimp-gallery .modal-body .video-loading a {
	background: url(../img/loading.gif) center no-repeat;
	background-size: 64px 64px;
}
.blueimp-gallery .modal-body .video-loading a:after {
	content: none;
}

@media screen and (min-width: 768px) {
  .blueimp-gallery .modal-dialog {
    right: auto;
    left: auto;
	width: auto;
    max-width: 900px;
    padding-left: 5%;
    padding-right: 5%;
  }
}

.doba{
    -webkit-box-shadow: 1px 5px 23px 0px rgba(128,128,125,1);
-moz-box-shadow: 1px 5px 23px 0px rgba(128,128,125,1);
box-shadow: 1px 5px 23px 0px rgba(128,128,125,1);
border-radius:20px;
}
    </style>
@endsection