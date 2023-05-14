@extends('layouts.app')

@section('content')
    <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
        data-background="img/banner/page-title-01.jpg">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="text-animation" data-in-effect="fadeInRight">Event Detail</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#!">Event Detail</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
            <span class="square bg-primary"></span>
            <span class="square bg-secondary"></span>
        </div>
    </section>

    <!-- EVENT DETAILS
            ================================================== -->
    <section>
        <div class="container">
            <div class="row">
                <!-- left content -->
                @if ($events)
                    @if ($events->id)
                        <div class="col-lg-9 pe-lg-2-5 pe-xl-2-9 mb-2-9 mb-lg-0">
                            <div class="wow fadeIn" data-wow-delay="200ms">
                                <img src="{{ $events->getFirstMediaUrl('events','bigthumb') }}" class="rounded" alt="...">
                            </div>
                            <div class="px-sm-1-9 mb-0 event-detail wow fadeIn">
                                <div class="event-timer align-items-center d-md-flex justify-content-md-between">
                                    <ul class="countdown text-center mb-0 ps-0">
                                        <!-- days -->
                                        <li>
                                            <span class="days">00</span>
                                            <p class="timeRefDays mb-0">days</p>
                                        </li>
                                        <!-- end days -->
                                        <!-- hours -->
                                        <li><span class="hours">00</span>
                                            <p class="timeRefHours mb-0">hours</p>
                                        </li>
                                        <!-- end hours -->
                                        <!-- minutes -->
                                        <li><span class="minutes">00</span>
                                            <p class="timeRefMinutes mb-0">minutes</p>
                                        </li>
                                        <!-- end minutes -->
                                        <!-- seconds -->
                                        <li class="border-none"><span class="seconds">00</span>
                                            <p class="timeRefSeconds mb-0">seconds</p>
                                        </li>
                                        <!-- end seconds -->
                                    </ul>
                                    <div class="mt-4 mt-md-0 text-center text-md-end">
                                        <a href="{{ url('/event/don/'.$events->id) }}" class="butn medium">Buy Ticket</a>
                                    </div>
                                </div>
                            </div>

                            <div class="border-bottom pb-1-9 mb-1-9 border-color-extra-light-gray">
                                <h2 class="mb-4 h3">{{ $events->Title }}</h2>
                                <ul class="list-style2 ps-0">
                                    <li><i class="far fa-clock pe-2 text-secondary"></i>{{ $events->time }} - {{ $events->end }}</li>
                                    <li><i class="fas fa-map-marker-alt pe-2 text-secondary"></i>{{ $events->venue }}</li>
                                </ul>
                            </div>

                            <div class="wow fadeIn mb-1-9" data-wow-delay="200ms">
                                <p class="w-95">{!! $events->descr !!}</p>
                                
                                 </div>
                            <div class="separator-line-horrizontal-full bg-medium-gray my-1-6 my-xl-1-9"></div>
                            <h6 class="mb-0 d-inline-block">Share us on:</h6>
                            <ul class="list-style2 ps-2">
                                <li><a href="https://www.facebook.com/TAHO786110/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/taho_tanzania/"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://mobile.twitter.com/taho_tanzania"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            <div class="separator-line-horrizontal-full bg-medium-gray my-1-6 my-xl-1-9"></div>

                            <!-- form -->
                            <div class="wow fadeIn" data-wow-delay="400ms">
                                <h3 class="mb-4 h4">Leave a Comment</h3>
                                  <form method="POST" action="{{ url('event/'.$events->id)}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="reply" rows="6" class="form-control" placeholder="Your Reply"></textarea>
                                    </div>
                                    <div>
                                        <button class="butn medium" type="submit">Leave Reply</button>
                                    </div>
                                </form>
                            </div>
                            <!-- end form -->
                        </div>
                        <!-- end left content -->
                    @endif
                @endif


                <!-- right sidebar -->
                <div class="col-lg-3">
                    <div class="side-bar">
                        <h6 class="h5 mb-3">Search</h6>
                        <div class="widget search wow fadeInUp" data-wow-delay="200ms">
                            <form method='post'>
                                <input type="hidden" name="form-name" value="form 1" />
                                <input type="search" name="search" placeholder="Type here ...">
                                <span></span>
                                <button type="submit" class="butn"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="widget wow fadeInUp" data-wow-delay="300ms">
                            <h6 class="h5 mb-3">Categories</h6>
                            <ul class="list-style4">
                                @if (count($categories))
                                        @foreach ($categories as $item)
                                            <li><a href="#!"><i class="fas fa-angle-right me-2"></i>{{ $item->Title }}</a></li>
                                        @endforeach
                                            
                                        @endif
                            </ul>
                        </div>

                        <div class="widget wow fadeInUp" data-wow-delay="500ms">
                            <h6 class="h5 mb-3">Popular Tags</h6>
                            <ul class="tags">
                                <li><a href="#!">Charity</a></li>
                                <li><a href="#!">Medical</a></li>
                                <li class="mb-0"><a href="#!">Food</a></li>
                                <li class="mb-0"><a href="#!">Donate</a></li>
                            </ul>
                        </div>
                        <div class="widget wow fadeInUp" data-wow-delay="600ms">
                            <h6 class="h5 mb-3">Follow Us</h6>
                            <ul class="social-icon-style1">
                                <li><a href="https://www.facebook.com/TAHO786110/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/taho_tanzania/"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://mobile.twitter.com/taho_tanzania"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end right sidebar -->

            </div>
        </div>
    </section>
@endsection
