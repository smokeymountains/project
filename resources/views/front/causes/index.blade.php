@extends('layouts.app')

@section('content')
    <!-- PAGE TITLE
            ================================================== -->
    <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
        data-background="{{ asset('assets/img/banner/page-title-01.jpg') }}">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="text-animation" data-in-effect="fadeInRight">Causes</h1>
                    <ul>
                        <li><a href="{{ url('') }}">Home</a></li>
                        <li><a href="#!">Causes</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
            <span class="square bg-primary"></span>
            <span class="square bg-secondary"></span>
        </div>
    </section>

    <!-- CAUSES
            ================================================== -->
    <section>
        <div class="container">
            <div class="section-heading">
                <span class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation"
                    data-in-effect="fadeInRight">our causes</span>
                <h2>Our causes</h2>
            </div>
            <div class="row mt-n1-9">
                @if (count($cause) > 0)
                    @foreach ($cause as $item)
                        <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                            <div class="card card-style1 border-color-extra-light-gray h-100">

                                <img src="{{ $item->getFirstMediaUrl('causes', 'thumb') }}" class="card-img-top"
                                    alt="... " style="width: 100%; height: 40%" />


                                <div class="card-body px-1-6 px-sm-1-9 pb-1-9 pt-2-4 position-relative">
                                    <a href="{{ url('front/donate/' . $item->id) }}" class="card-btn">Donate Now</a>
                                    <h3 class="h4 mb-3"><a href="causes-detail.html">{{ $item->Title }}</a></h3>
                                    <p class="mb-1-9">{{ Str::limit($item->MetaDescr, 50) }}</p>
                                    <!-- <div class="skills mb-1-9">
                                       <div class="skills-progress">
                                        </div>
                                    </div>-->
                                    <a href="{{ url('causes/' . $item->id) }}" class="butn-read"><span>Read More</span></a>
                                </div>
                                <div class="d-flex justify-content-between py-3 px-1-6 px-sm-1-9 bg-white card-footer">
                                    <p class="mb-0">
                                        <label class="mb-0 font-weight-700">Raised:</label> <span
                                            class="text-primary">${{ $item->availableAmount }}</span>
                                    </p>
                                    <p class="mb-0">
                                        <label class="mb-0 font-weight-700">Goal:</label> <span
                                            class="text-primary">${{ $item->causeGoal }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="row wow fadeIn" data-wow-delay="400ms">
                <div class="col-sm-12">
                    <!-- pager -->
                    <div class="text-center mt-6 mt-lg-7">
                        <div class="pagination text-extra-dark-gray">
                            <ul>
                                <li><a href="#!"><i
                                            class="fas fa-long-arrow-alt-left me-1 d-none d-sm-inline-block"></i> Prev</a>
                                </li>
                                <li class="active"><a href="#!">1</a></li>
                                <li><a href="#!">2</a></li>
                                <li><a href="#!">3</a></li>
                                <li><a href="#!">Next <i
                                            class="fas fa-long-arrow-alt-right ms-1 d-none d-sm-inline-block"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end pager -->
                </div>
            </div>
        </div>
    </section>
@endsection
