<header class="header-style3">

    <div id="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="top-bar-info">
                        <ul class="ps-0">
                            <li><i class="ti-mobile text-secondary"></i>(+255) 767 291 030</li>
                            <li class="d-none d-sm-inline-block"><i class="ti-email text-secondary"></i>info@tahotz.org</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 d-none d-md-block">
                    <ul class="top-social-icon ps-0">
                        <li><a href="https://www.facebook.com/TAHO786110/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://mobile.twitter.com/taho_tanzania"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/taho_tanzania/"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                         
                <li>
                    @if (Route::has('login'))
                    @auth
                        <a href="{{ url('admin/index') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Profile</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                       
                    @endauth
                </li>
            @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-default">

       

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">

                            <div class="navbar-header navbar-header-custom" background="black">
                                <!-- logo -->
                                <a href="{{ url('') }}" class="navbar-brand logowhite"><img id="logo" src="{{asset('image/TAHO-TZ-1.png')}}" alt="logo">
                                   
                                </a>
                                <!-- end logo -->
                            </div>

                            <div class="navbar-toggler bg-primary"></div>

                            <!-- menu area -->
                            <ul class="navbar-nav ms-auto mt-lg-2" id="nav" style="display: none;">
                                <li><a href="{{url(' ')}}">Home</a></li>
                                <li><a href="{{url('/about')}}">About Us</a></li>
                                <li><a href="{{url('/causes')}}">Causes</a></li>
                                <li><a href="{{url('/apeal')}}">Apeals</a></li>
                                <li><a href="#!">Other Links</a>
                                    <ul>
                                        <li><a href="{{url('/categories')}}">Categories</a></li>
                                        <li><a href="{{url('/volunteer')}}">Volunteer</a></li>
                                        <li><a href="{{url('/gallery')}}">Gallery</a></li>
                                        <li><a href="{{url('/donate')}}">Donate Now</a></li>
                                        <li><a href="{{url('/faq')}}">FAQ</a></li>
                                        <li><a href="{{ url('/pdf') }}">Testimonies</a></li>
                                         
                                    </ul>
                                </li>
                                <li><a href="{{url('/event')}}">Events</a></li>
                                <li><a href="{{('/blog')}}">Blog</a>     
                                </li>
                                <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                
                            </ul>
                            <!-- end menu area -->

                            <!-- attribute navigation -->
                            <div class="attr-nav">
                                <ul>
                                    <li class="search me-1 me-lg-0"><a href="#!"><i class="fas fa-search"></i></a></li>
                                    <li class="d-none d-xl-inline-block"><a href="{{url('/volunteer')}}" class="butn theme small text-white">Join us now</a></li>
                                </ul>
                            </div>
                            <!-- end attribute navigation -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>