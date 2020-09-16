<header>
        <div class="header-area bg-dark">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-5 ">
                            <div class="header_left">
                                <p>Welcome World Media Crew Locations</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="header_right d-flex">
                                    <div class="short_contact_list">
                                            <ul>
                                                <li><a href="#"> <i class="fa fa-envelope"></i> info@worldmediacrew.com</a></li>
                                                <li><a href="#"> <i class="fa fa-phone"></i> 1601-609 6780</a></li>
                                            </ul>
                                        </div>
                                        <div class="social_media_links">
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="{{asset('/')}}">
                                        <img src="{{asset('/')}}img/logic.png" alt="" style="    width: 140px;   position: relative;   top: -9px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation" style="text-align:right;">
                                            <li><a class="active" href="{{asset('/')}}">home</a></li>
                                            <li><a  href="{{asset('/all')}}">All Locations</a></li>
                                            <li><a href="">Find Locations <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="{{asset('/')}}">Find Locations</a></li>
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
                            <li><a href="{{asset('./home')}}">Account</a></li>
                            @endif
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
