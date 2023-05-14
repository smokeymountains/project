@extends('layouts.app')

@section('content')
    <!-- BANNER================================================== -->
    <section class="p-0 main-banner">
        <div class="px-lg-1-6 px-xl-2-0 px-xxl-8">
            <div class="slider-fade owl-carousel owl-theme w-100 alt-font">
                @if ($settings)
                    @foreach ($settings as $item)
                        <div class="text-start item bg-img cover-background pt-6 pb-14 py-md-16 py-lg-20 py-xxl-24 rounded-lg main-font"
                            data-overlay-dark="6" data-background="{{ $item->getFirstMediaUrl('home', 'thumb') }}">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mb-1-9 mb-lg-0 py-5">
                                        <span
                                            class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font text-animations mb-3"
                                            data-in-effect="fadeInRight">{{ $item->title }}</span>
                                        <h1>{{ $item->descr }}</h1>
                                        <a href="{{ url('/volunteer') }}" class="butn medium">Join Us now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>

    <!-- ABOUT ================================================== -->
    @if ($about)
        <section>
            <div class="container">
                <div class="row align-items-center">
                    @foreach ($about as $item)
                        <div class="col-lg-7 mb-1-9 mb-md-2-9 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                            <div class="about-us pe-lg-5">
                                <div class="text-center text-md-end">
                                    <img src="{{ $item->getFirstMediaUrl('about1', 'bigthumb') }}" class="rounded tilt"
                                        alt="...">
                                </div>
                                <img src="{{ $item->getFirstMediaUrl('about2', 'bigthumb') }}"
                                    class="about-img rounded tilt d-none d-md-inline-block" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-5 wow fadeIn" data-wow-delay="400ms">
                            <div class="ps-xl-8">
                                <div class="section-heading mb-4 text-start">
                                    <span
                                        class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation"
                                        data-in-effect="fadeInRight">about us</span>
                                    <h2 class="mb-0">You can help the poor</h2>
                                </div>
                                <p>{!! Str::limit($item->descr1, 300) !!}</p>
                                <a href="{{ url('about/' . $item->id) }}" class="butn-read"><span>Read More</span></a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <img src="{{ asset('assets/img/icons/icon-7.png') }}" alt=""
                class="position-absolute left-5 top-15 ani-top-bottom opacity7 d-none d-lg-block">
            <img src="{{ asset('assets/img/icons/icon-8.png') }}" alt=""
                class="position-absolute right-5 top-75 ani-top-bottom opacity7 d-none d-lg-block">
        </section>
    @endif


    <!-- CAUSES
                      @if (count($cause) > 0)
    ================================================== -->
    <section class="pt-1-6 pt-lg-14 bg-img cover-background" data-background="{{ asset('assets/img/content/map-bg.jpg') }}">
        <div class="container">
            <div class="section-heading">
                <span class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation"
                    data-in-effect="fadeInRight">our causes</span>
                <h2>Popular causes</h2>
            </div>

            <div class="row mt-n1-9">


                @foreach ($cause as $item)
                    @if ($item->popular == '1')
                        <div class="items col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                            <div class="card card-style1 border-color-extra-light-gray h-100">

                                <img src="{{ $item->getFirstMediaUrl('causes', 'thumb') }}" class="card-img-top"
                                    alt="... " />


                                <div class="card-body px-1-6 px-sm-1-9 pb-1-9 pt-2-4 position-relative">
                                    <a href="{{ url('causes/don/' . $item->id) }}" class="card-btn">Donate Now</a>
                                    <h3 class="h4 mb-3"><a href="{{ url('causes/' . $item->id) }}">{{ $item->Title }}</a>
                                    </h3>
                                    <p class="mb-1-9">{{ Str::limit($item->MetaDescr, 50) }}</p>

                                    <a href="{{ url('causes/' . $item->id) }}" class="butn-read"><span>Read
                                            More</span></a>
                                    <!--<div class="skills mb-1-9">
                                                                        <div class="skills-progress">
                                                                            <span data-value='50%'></span>
                                                                        </div>
                                                                    </div>-->
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
                    @endif
                @endforeach


            </div>

        </div>
    </section>
    @endif
    <!-- COUNTER
                                                                            ================================================== -->
    <section class="bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
        data-background="img/bg/bg-1.jpg">
        <div class="container">
            <div class="section-heading text-start">
                <span class="d-block text-secondary display-22 display-md-21 display-lg-20 alt-font wow text-animation"
                    data-in-effect="fadeInRight">our statistics</span>
                <h2 class="mb-0 text-white">We provide help</h2>
            </div>
            <div class="row mt-n1-9">
                <div class="col-md-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                    <div class="counter-style1 bg-primary">
                        <div class="counter-text">
                            <span class="countup mb-0 h1 text-white">
                                356</span>
                        </div>
                        <p class="display-28 letter-spacing-1 mb-0 text-white">Featured Campaign</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="400ms">
                    <div class="counter-style1 bg-secondary">
                        <div class="counter-text">
                            <span class="countup mb-0 h1 text-white">
                                149</span>
                        </div>
                        <p class="display-28 letter-spacing-1 mb-0 text-dark">Dedicated Volunteers</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="600ms">
                    <div class="counter-style1">
                        <div class="counter-text">
                            <span class="countup mb-0 text-dark h1 alt-font">
                                7625</span>
                        </div>
                        <p class="display-28 letter-spacing-1 mb-0 text-dark">Happy People</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Apeals
                 @if (count($apeal) > 0)
    ================================================== -->
    <section class="pt-1-6 pt-lg-14 bg-img cover-background"
        data-background="{{ asset('assets/img/content/map-bg.jpg') }}">
        <div class="container">
            <div class="section-heading">
                <span class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation"
                    data-in-effect="fadeInRight">our apeals</span>
                <h2>Popular apeals</h2>
            </div>

            <div class="row mt-n1-9">


                @foreach ($apeal as $item)
                    @if ($item->status == '1')
                        <div class="items col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                            <div class="card card-style1 border-color-extra-light-gray h-100">

                                <img src="{{ $item->getFirstMediaUrl('apeal', 'thumb') }}" class="card-img-top"
                                    alt="... " />


                                <div class="card-body px-1-6 px-sm-1-9 pb-1-9 pt-2-4 position-relative">
                                    <a href="{{ url('apeal/don/' . $item->id) }}" class="card-btn">Donate Now</a>
                                    <h3 class="h4 mb-3"><a
                                            href="{{ url('apeal/' . $item->id) }}">{{ $item->Title }}</a>
                                    </h3>
                                    <p class="mb-1-9">{{ Str::limit($item->meta, 50) }}</p>

                                    <a href="{{ url('apeal/' . $item->id) }}" class="butn-read"><span>Read
                                            More</span></a>

                                </div>

                            </div>
                        </div>
                    @endif
                @endforeach


            </div>

        </div>
    </section>
    @endif
    <!-- SERVICES
                  @if (count($categories) > 0)
    ================================================== -->
    <section>
        <div class="container">
            <div class="section-heading">
                <span class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation"
                    data-in-effect="fadeInRight">our categories</span>
                <h2>What we do</h2>
            </div>
            <div class="row mt-n1-9">

                @foreach ($categories as $item)
                    @if ($item->popular == '1')
                        <div class="col-lg-4 col-md-6 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                            <div class="card card-style2 border-0">
                                <div class="card-body px-1-6 px-sm-1-9 py-1-9">
                                    <div class="mb-1-6">
                                        <img src="{{ $item->getFirstMediaUrl('images', 'iconthumb') }}" alt="...">
                                    </div>
                                    <div>
                                        <h3 class="h4 mb-3"><a
                                                href="{{ url('categories/' . $item->id) }}">{{ $item->Title }}</a>
                                        </h3>
                                        <p class="mb-1-6"> {!! $item->metaDescription !!} </p>
                                        <a href="{{ url('categories/' . $item->id) }}" class="butn-read"><span>Read
                                                More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach


            </div>
        </div>
        <img src="{{ asset('assets/img/icons/icon-9.png') }}" alt=""
            class="position-absolute right-5 top-75 ani-top-bottom opacity7 d-none d-lg-block">
    </section>
    @endif
    <!-- EVENT
                  @if (count($events) > 0)
    ================================================== -->
    <section class="pt-0">
        <div class="container">
            <div class="section-heading">
                <span class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation"
                    data-in-effect="fadeInRight">upcoming events</span>
                <h2>Our events</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12 order-lg-1 order-2 pe-lg-4">

                    @foreach ($events as $item)
                        <div class="bg-light p-4 mb-1-9 wow fadeInUp" data-wow-delay="200ms">
                            <div class="media">
                                <div class="rounded text-center bg-primary py-3 px-4">
                                    <span
                                        class="font-weight-600 text-white mb-0 d-block h4 lh-1">{{ $item->date }}</span>
                                    <span class="text-white">TAHO</span>
                                </div>
                                <div class="ps-1-6 align-self-center media-body">
                                    <div class="text-secondary small font-weight-600"><i
                                            class="ti-time me-1"></i>{{ $item->time }} - {{ $item->end }}</div>
                                    <h4 class="h5"><a href="{{ url('event/' . $item->id) }}">{{ $item->Title }}</a>
                                    </h4>
                                    <p class="mb-0">{{ $item->meta }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
                @if ($latestPost)
                    <div class="col-lg-6 col-md-12 order-lg-2 order-1 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                        <div class="card card-style1 border-color-extra-light-gray h-100">
                            <img src="{{ $latestPost->getFirstMediaUrl('events', 'thumb') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body px-1-6 px-sm-1-9 pb-1-9 pt-2-4 position-relative">
                                <span class="card-btn">{{ $latestPost->date }}</span>
                                <div class="mb-2 text-secondary small font-weight-600"><i class="ti-time me-1"></i>
                                    {{ $latestPost->time }} - {{ $latestPost->end }}</div>
                                <h3 class="h4 mb-3"><a
                                        href="{{ url('event/' . $item->id) }}">{{ $latestPost->Title }}</a></h3>
                                <p>{{ $latestPost->meta }}</p>
                                <a href="{{ url('event/' . $item->id) }}" class="butn-read"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @endif




    <!-- VOLUNTEERS
                                                                            ================================================== -->


    <!-- CALL TO ACTION
                                                                            ================================================== -->
    @if (count($gen) > 0)
        @foreach ($gen as $item)
            <section class="bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg wow fadeIn" data-wow-delay="200ms"
                data-background="{{ $item->getFirstMediaUrl('general', 'thumb') }}" data-overlay-dark="6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-lg-8">
                            <h2 class="text-white display-16 display-sm-11 display-md-9 display-lg-5 mb-1-9">We aream to
                                create
                                a
                                vibrant destiny of the underprivileged children</h2>
                            <a href="{{ url('/volunteer') }}" class="butn secondary">Join us Now</a>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    @endif


    <!-- BLOG
                  @if (count($blog) > 0)
    ================================================== -->
    <section>
        <div class="container">
            <div class="section-heading">
                <span class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation"
                    data-in-effect="fadeInRight">our blogs</span>
                <h2>Latest news</h2>
            </div>
            <div class="row mt-n1-9">
                <div class="testimonial-carousel owl-carousel owl-theme">

                    @foreach ($blog as $item)
                        <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn " data-wow-delay="200ms">
                            <article class="card card-style3 border-color-extra-light-gray h-100">
                                <div class="card-img">
                                    <img srcset="{{ $item->getFirstMediaUrl('blog', 'thumb') }}" alt="..." />
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('assets/img/avatars/avatar-05.jpg') }}" alt="...">
                                        </div>
                                        <span class="display-30 text-white">By {{ $item->Author }}</span>
                                    </div>
                                </div>
                                <div class="card-body px-1-6 px-sm-1-9 py-2-3">
                                    <h3 class="font-weight-600 h4 mb-1-6"><a
                                            href="{{ url('blog/' . $item->id) }}">{{ $item->Title }}</a>
                                    </h3>
                                    <a href="{{ url('blog/' . $item->id) }}" class="butn-read"><span>Read
                                            More</span></a>
                                </div>
                                <div
                                    class="d-flex justify-content-between card-footer px-1-6 px-sm-1-9 py-3 bg-white border-color-extra-light-gray">
                                    <span class="display-30 font-weight-600"><i
                                            class="far fa-calendar-alt me-2 text-secondary"></i><a
                                            href="#!">{{ $item->created_at->diffForHumans() }}</a></span>
                                    <span class="display-30 font-weight-600"><i
                                            class="far fa-comment-dots me-2 text-secondary"></i><a
                                            href="#!">{{ count($item->comments) }}
                                            Comments</a></span>
                                </div>
                            </article>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/icons/icon-10.png') }}" alt=""
            class="position-absolute left-5 top-15 ani-top-bottom opacity4 d-none d-lg-block">
    </section>
    @endif
@endsection

@section('scripts')
    <script>
        $('.causes-carousel').owlCarousel({
            loop: true,
            margin: 1,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
@endsection
