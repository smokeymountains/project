@extends('layouts.app')

@section('content')

    <!-- PAGE TITLE
                ================================================== -->
    @if ($cause)
        @if ($cause->id)
            <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
                data-background="{{ asset('assets/img/banner/page-title-01.jpg') }}">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h1 class="text-animation" data-in-effect="fadeInRight">{{ $cause->Title }}</h1>
                            <ul>
                                <li><a href="{{ url('') }}">Home</a></li>
                                <li><a href="#!">Cause Description</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
                    <span class="square bg-primary"></span>
                    <span class="square bg-secondary"></span>
                </div>
            </section>
        @endif
    @endif
    @if ($cause)
        @if ($cause->id)
            <section class="cause-details">
                <div class="container">
                    <div class="row">

                        <!-- left content -->
                        <div class="col-lg-9 pe-lg-2-5 pe-xl-2-9 mb-2-9 mb-lg-0">
                            <div>
                                <img src="{{ $cause->getFirstMediaUrl('causes', 'bigthumb') }}" class="rounded-top"
                                    alt="...">
                              <!--  <div class="skills green mb-1-9">
                                    <div class="skills-progress">
                                        <span data-value='50%'></span>
                                    </div>
                                </div>-->
                            </div>
                            <h2 class="mb-4">{{ $cause->Title }}</h2>
                            <div class="d-block d-md-flex justify-content-md-between mb-1-9 pb-1-9 border-bottom border-color-extra-light-gray wow fadeIn"
                                data-wow-delay="200ms">
                                <div>
                                    <ul class="list-style3 clearfix">
                                        <li><a href="#!" class="font-weight-600">Goal: <span
                                                    class="text-primary">${{ $cause->causeGoal }}</span></a></li>
                                        <li><a href="#!" class="font-weight-600">Raised: <span
                                                    class="text-primary">${{ $cause->availableAmount }}</span></a></li>
                                         <li class="mb-0"><a href="#!" class="font-weight-600">Supporter: <span
                                                    class="text-primary">0</span></a></li>
                                        <li class="mb-0"><a href="#!" class="font-weight-600">Donators: <span
                                                    class="text-primary">0</span></a></li> 
                                    </ul>
                                </div>
                                <div class="mt-3 mt-md-0">
                                    <a href="{{ url('/causes/don/'.$cause->id) }}" class="butn medium">Donate Now</a>
                                </div>
                            </div>
                            <div class="mb-2-5 wow fadeIn" data-wow-delay="400ms">
                                <h3 class="mb-3 h4">DESCRIPTION OF THE CAUSE </h3>
                                
                                <p>{!! $cause->Description !!}</p>
                                                               
                               </div>

                            <!-- form -->
                            <div class="wow fadeIn" data-wow-delay="200ms">
                                <h3 class="mb-3 h4">Leave a Comment</h3>
                                <form method="POST" action="{{ url('causes/'.$cause->id)}}">
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
                                        <button class="butn medium" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- end form -->

                        </div>
                        <!-- end left content -->

                        <!-- right sidebar -->
                        <div class="col-lg-3">
                            <div class="side-bar">
                               
                                <div class="widget wow fadeInUp" data-wow-delay="300ms">
                                    <h6 class="h5 mb-3">Categories</h6>
                                    <ul class="list-style4">
                                        @if (count($categories))
                                        @foreach ($categories as $item)
                                            <li><a href="#!"><i class="fas fa-angle-right me-2"></i>{{ $item->Title }}</a></li>
                                        @endforeach
                                            
                                        @endif
                                        
                                    <!--    <li><a href="#!"><i class="fas fa-angle-right me-2"></i>Education</a></li>
                                        <li><a href="#!"><i class="fas fa-angle-right me-2"></i>Fundraising</a></li>
                                        <li><a href="#!"><i class="fas fa-angle-right me-2"></i>Organization</a></li>
                                        <li><a href="#!"><i class="fas fa-angle-right me-2"></i>Donation</a></li>
                                        <li><a href="#!"><i class="fas fa-angle-right me-2"></i>Food</a></li>
                                        <li><a href="#!"><i class="fas fa-angle-right me-2"></i>Camp</a></li>-->
                                    </ul>
                                </div>
                            
                                <div class="widget wow fadeInUp" data-wow-delay="600ms">
                                    <h6 class="h5 mb-3">Follow Us</h6>
                                    <ul class="social-icon-style1">
                                        
                                        <li><a href="https://www.facebook.com/TAHO786110/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://mobile.twitter.com/taho_tanzania"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.instagram.com/taho_tanzania/"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end right sidebar -->
                    </div>
                </div>
            </section>
        @endif
    @endif


@endsection
