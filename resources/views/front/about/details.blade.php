@extends('layouts.app')

@section('content')
    <!-- PAGE TITLE
                ================================================== -->
    <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
        data-background="{{ asset('assets/img/banner/page-title-01.jpg') }}">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="text-animation" data-in-effect="fadeInRight">About Us</h1>
                    <ul>
                        <li><a href="{{ url('') }}">Home</a></li>
                        <li><a href="#!">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
            <span class="square bg-primary"></span>
            <span class="square bg-secondary"></span>
        </div>
    </section>

    <!-- OUR MISSION
                ================================================== -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                @if ($settings)
                    @if ($settings->id)
                                   <div class="col-lg-5 mb-1-9 mb-md-2-5 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                        <div>
                            <div class="section-heading  mb-3 mb-lg-4 text-start">
                                <span
                                    class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation"
                                    data-in-effect="fadeInRight">mission</span>
                                <h2>Our mission</h2>
                            </div>
                            <p class="display-29 display-lg-28 font-weight-400 mb-1-6 mb-lg-2-3">{!! $settings->descr1 !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <div class="row">
                            <div class="col-6 px-1 wow fadeInUp" data-wow-delay="400ms">
                                <img src="{{ $settings->getFirstMediaUrl('about1') }}" class="tilt rounded"
                                    alt="...">
                            </div>
                            <div class="col-6 px-1 wow fadeInUp" data-wow-delay="500ms">
                                <img src="{{ $settings->getFirstMediaUrl('about2')  }}" class="tilt rounded"
                                    alt="...">
                            </div>
                        </div>
                    </div> 
                    @endif
                    
        
                   

                @endif

            </div>
        </div>
        <img src="{{ asset('assets/img/icons/icon-7.png') }}" alt=""
            class="position-absolute left-5 top-15 ani-top-bottom opacity7 d-none d-lg-block">
    </section>

    <!-- OUR VISION
                ================================================== -->
    <section class="pt-0">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-lg-5 offset-xl-1 order-1 order-lg-2 mb-1-9 mb-md-2-5 mb-lg-0 wow fadeIn"
                    data-wow-delay="400ms">
                    <div>
                        <div class="section-heading mb-3 mb-lg-4 text-start align-items-center">
                            <span
                                class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation align-items-center"
                                data-in-effect="fadeInRight">vision</span>
                            <h2 align-items-center>Our vision</h2>
                        </div>
                        <p class="display-29 display-lg-28 mb-1-6 mb-lg-2-3" >{!! $settings->descr2 !!}</p>

                    </div>
                </div>
            </div>
        </div>
        <img src="img/icons/icon-8.png" alt=""
            class="position-absolute right-5 top-75 ani-top-bottom opacity7 d-none d-lg-block">
    </section>




    <!-- CALL TO ACTION
                ================================================== -->
    <section class="bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg wow fadeIn" data-wow-delay="200ms"
        data-background="{{ asset('assets/img/bg/bg-4.jpg') }}" data-overlay-dark="6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 text-center">
                    <h2 class="text-white display-16 display-sm-11 display-md-9 display-lg-5 mb-1-9">
                        Lets get effective to helping the needy together</h2>
                    <a href="{{ url('/volunteer') }}" class="butn secondary">
                        <span>Join Us Now</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
