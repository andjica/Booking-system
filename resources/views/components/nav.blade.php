<header>
        <div class="header-area bg-dark">
     
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                        
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo  vb">
                                    <a href="{{asset('/')}}">
                                        <img src="{{asset('/')}}img/logic.png" alt="" style="    width: 170px; ">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation" >
                                            <li><a class="active" href="{{asset('/')}}">home</a></li>
                                            <li><a href="">Find Locations <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a  href="{{asset('/all')}}">All Locations</a></li>
                                                        <li><a href="{{asset('/supporting')}}">Locations Support</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{asset('./register')}}"></a></li>
                                            <li><a href="#">Become a renter <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="{{asset('/register')}}">Register</a></li>
                                                    <li><a href="{{asset('/login')}}">Login</a></li>
                                                </ul>
                                            </li>
                                            @if(auth()->user())
                            <li class="nav-item">
                             <a class="nav-link" href="{{asset('/logout')}}">Logout</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link " href="{{asset('/home')}}" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>

                                
                            </li>
                            @else
                           
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            
                            @endif
                            <li><a href="{{route('contact')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <footer class="mobile">
		<div class="container">
			<div class="row ">
				<ul class="xd">
					<li class="item-menu-mobile bb">
					<i class="fa fa-home faks"></i>
						<a class="lilf" href="{{asset('/')}}">Home</a>
					</li>

					<li class="item-menu-mobile bb">
					<i class="fa fa-search faks"></i>
						<a class="lilf" href="{{asset('/')}}">Search</a>
					</li>

					<li class="item-menu-mobile bb">
					<i class="fa fa-map-marker faks"></i>
						<a class="lilf" href="{{asset('/all')}}">Locations</a>
					</li>

					<li class="item-menu-mobile bb">
					<i class="fa fa-tags faks"></i>
						<a class="lilf" href="{{asset('/all')}}">Hotspots</a>
					</li>

					<li class="item-menu-mobile bb">
					<i class="fa fa-address-card faks"></i>
						<a class="lilf" href="{{asset('/home')}}">Account</a>
					</li>
				</ul>
			</div>
		</div>
</footer>

<style>
@media screen and (min-width:768px){
    .mobile{
        display:none !important;
    }
    #navigation{
        text-align:right;
    }
}

@media screen and (max-width:768px){
    .mobile{
        position:fixed;
        bottom:0;
        width:100%;
        z-index:1000000;
    }
    .vb{
        text-align:center;
    }

    #navigation{
    text-align: left !important;
    display: block;
    }
    .header-area .main-header-area.sticky .header_bottom_border {
    border-bottom: none;
    padding-top: 8px;
}
.slicknav_menu .slicknav_nav {
    background: #fff;
    float: right;
    margin-top: 0;
    padding: 0;
    width: 100%;
    padding: 0;
    border-radius: 0px;
    margin-top: 5px;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    top: 12px;
}

    .header-area .main-header-area {
    padding: 20px 10px;
    background: #fff;
    background: transparent;
}
    .xd{
		display: flex;
        width: 100%;
        height: 50px;
	}
	.bb{
		width: 20%;
		height: 60px;
			text-align: center;
		display: grid;
		
        background-color: white;
	}
	.faks{
		font-size: 28px;
		padding-top: 7px;
		height: 100%;
        width: 100%;
        color: #337ab7;
	}
	.lilf{
		font-weight: 700;
		font-size: 13px;
	}
}
</style>