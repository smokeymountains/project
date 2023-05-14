@extends('layouts.app')

@section('content')
    <!-- PAGE TITLE
            ================================================== -->
    <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
        data-background="img/banner/page-title-01.jpg">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="text-animation" data-in-effect="fadeInRight">Services</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#!">What we do</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
            <span class="square bg-primary"></span>
            <span class="square bg-secondary"></span>
        </div>
    </section>

    <!-- SERVICES
            ================================================== -->
    <section>
        <div class="container">
            <div class="section-heading">
                <span class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation"
                    data-in-effect="fadeInRight">our services</span>
                <h2>What we do</h2>
            </div>
            <div class="row mt-n1-9">
                @if (count($categories) > 0)
                    @foreach ($categories as $item)
                         <div class="col-lg-4 col-md-6 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                                <div class="card card-style2 border-0">
                                    <div class="card-body px-1-6 px-sm-1-9 py-1-9">
                                        <div class="mb-1-6">
                                            <img src="{{ $item->getFirstMediaUrl('images', 'iconthumb') }}"
                                                alt="...">
                                        </div>
                                        <div>
                                            <h3 class="h4 mb-3"><a href="{{ url('categories/' . $item->id) }}">{{ $item->Title }}</a></h3>
                                            <p class="mb-1-6"> {!! $item->metaDescription !!} </p>
                                            <a href="{{ url('categories/' . $item->id) }}" class="butn-read"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
