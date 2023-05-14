@extends('layouts.app')

@section('content')
    <!-- PAGE TITLE
            ================================================== -->
    <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
        data-background="{{ asset('assets/img/banner/page-title-01.jpg') }}">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="text-animation" data-in-effect="fadeInRight">Blog</h1>
                    <ul>
                        <li><a href="{{ url('') }}">Home</a></li>
                        <li><a href="#!">Blog </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
            <span class="square bg-primary"></span>
            <span class="square bg-secondary"></span>
        </div>
    </section>

    <!-- BLOG LIST
            ================================================== -->
    <section>
        <div class="container">
            <div class="row">
                <!-- left content -->
                <div class="col-lg-9 pe-lg-2-5 pe-xl-2-9 mb-2-9 mb-lg-0">
                    <div class="row mt-n1-9">
                        @if (count($blog) > 0)
                            @foreach ($blog as $item)
                                <div class="col-lg-12 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                                    <article class="card card-style3 border-color-extra-light-gray h-100">
                                        <div class="card-img">
                                            <img src="{{ $item->getFirstMediaUrl('blog') }}" alt="...">
                                            <div class="author-info">
                                                <div class="author-img">
                                                    <img src="{{ asset('assets/img/avatars/avatar-05.jpg') }}"
                                                        alt="...">
                                                </div>
                                                <span class="display-30 text-white">{{ $item->Author }}</span>
                                            </div>
                                        </div>
                                        <div class="card-body px-1-6 px-sm-1-9 py-2-3">
                                            <h3 class="font-weight-600 h4 mb-1-6"><a href="#!">{{ $item->Title }}</a>
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
                                                    href="#!">{{ count($item->comments) }} Comments</a></span>
                                        </div>
                                    </article>
                                </div>

                    </div>
                    <!-- pager -->
                    <div class="text-center mt-6 mt-lg-7 wow fadeIn" data-wow-delay="400ms">
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
                    @endforeach
                    @endif
                    <!-- end pager -->
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
                                        <li><a href="#!"><i class="fas fa-angle-right me-2"></i>{{ $item->Title }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="widget wow fadeInUp" data-wow-delay="400ms">
                            <h6 class="h5 mb-3">Popular Blog Posts</h6>
                            @foreach ($blog as $item)
                                @if ($item->trending == 1)
                                    
                                    <div class="media mb-1-6">
                                        <img class="me-3" src="{{ $item->getFirstMediaUrl('blog', 'tinythumb') }}"
                                            alt="...">
                                        <div class="media-body align-self-center">
                                            <h4 class="h6 mb-1"><a href="#!">{{ $item->Title }}</a></h4>
                                            <small>{{ count($item->comments) }} Comments</small>
                                        </div>
                                    </div>
                                @endif
                            @endforeach


                        </div>

                        <div class="widget wow fadeInUp" data-wow-delay="600ms">
                            <h6 class="h5 mb-3">Popular Tags</h6>
                            <ul class="tags">

                                <li><a href="#!">Charity</a></li>

                            </ul>
                        </div>
                        <div class="widget wow fadeInUp" data-wow-delay="700ms">
                            <h6 class="h5 mb-3">Follow Us</h6>
                            <ul class="social-icon-style1">

                                <li><a href="https://www.facebook.com/TAHO786110/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="https://mobile.twitter.com/taho_tanzania"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/taho_tanzania/"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end right sidebar -->

            </div>
        </div>
    </section>
@endsection
