@extends('layouts.app')
@section('content')
    <!-- PAGE TITLE
                    ================================================== -->
    <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
        data-background="img/banner/page-title-01.jpg">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="text-animation" data-in-effect="fadeInRight">Volunteer</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#!">Volunteer</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
            <span class="square bg-primary"></span>
            <span class="square bg-secondary"></span>
        </div>
    </section>

    <!-- VOLUNTEERS
                    ================================================== -->

    <section>
        <div class="container">
            <div class="section-heading">
                <span class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation"
                    data-in-effect="fadeInRight">our team</span>
                <h2>Our volunteers</h2>
            </div>
            @if (count($user) > 0)
                <div class="row mt-n1-9">
                    @foreach ($user as $item)
                        @if ($item->role_as != 1)
                            <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                                <div class="position-relative team-style1">
                                    <div class="team-img"><a href="#!"><img
                                                src="{{ $item->getFirstMediaUrl('users', 'thumb') }}" alt="..."></a>
                                        <div class="team-overlay"></div>
                                    </div>
                                    <div class="team-content text-center">
                                        <h3 class="text-white h4">{{ $item->name }}</h3>
                                        <p class="text-white opacity7 mb-2">Volunteers</p>
                                        <ul class="social-icon-style1">
                                            <li><a href="https://www.facebook.com/TAHO786110/"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://mobile.twitter.com/taho_tanzania"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/taho_tanzania/"><i
                                                        class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif

        </div>
    </section>


    <!-- BECOME A VOLUNTEERS
                    ================================================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-xl-7">
                    <div class="ps-lg-1-6">
                        <div class="p-1-6 p-lg-1-9 p-xl-2-5 border border-color-extra-light-gray rounded">
                            <h2 class="text-center mb-4">Become a volunteer</h2>
                            <form action="{{ url('volunteer') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="quform-elements">
                                    <div class="row">
                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element">
                                                <label for="name">Your Name <span
                                                        class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="name" type="text" name="name"
                                                        placeholder="Your name here" />
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element">
                                                <label for="email">Your Email <span
                                                        class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="email"
                                                        placeholder="Your email here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element">
                                                <label for="subject">Your Subject <span
                                                        class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <select name="catId" class="form-control" id="subject">
                                                        <option value="#">Select your Category here</option>
                                                        @foreach ($categories as $item)
                                                            <option value="{{ $item->id }}">
                                                                {{ $item->Title }}</option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element">
                                                <label for="phone">Contact Number</label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" name="phone"
                                                        placeholder="Your phone here" />
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class="col-md-12">
                                            <div class="quform-element">
                                                <label for="message">Message <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Why you join volunteers"
                                                        required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Textarea element -->

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div>
                                                <button class="butn medium" type="submit">Join Us</button>
                                            </div>

                                        </div>
                                        <!-- End Submit button -->

                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
