@extends('layouts.app')

@section('content')

    <!-- PAGE TITLE
                ================================================== -->
    @if ($categories)
        @if ($categories->id)
            <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
                data-background="{{ asset('assets/img/banner/page-title-01.jpg') }}">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h1 class="text-animation" data-in-effect="fadeInRight">{{ $categories->Title }}</h1>
                            <ul>
                                <li><a href="{{ url('') }}">Home</a></li>
                                <li><a href="#!">Category Description</a></li>
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
    @if ($categories)
        @if ($categories->id)
            <section class="cause-details">
                <div class="container">
                    <div class="row">

                        <!-- left content -->
                        <div class="col-lg-9 pe-lg-2-5 pe-xl-2-9 mb-2-9 mb-lg-0">
                            <h2 class="mb-4">{{ $categories->Title }}</h2>
                            <div class="d-block d-md-flex justify-content-md-between mb-1-9 pb-1-9 border-bottom border-color-extra-light-gray wow fadeIn"
                                data-wow-delay="200ms">
                               
                              
                            </div>
                            <div class="mb-2-5 wow fadeIn" data-wow-delay="400ms">
                                <h3 class="mb-3 h4">DESCRIPTION OF THE CATEGORY </h3>
                                
                                <p>{!! $categories->Description !!}</p>
                                
                                                                 
                               
                               
                       
                        </div>
                        <!-- end left content -->

                   
                    </div>
                </div>
            </section>
        @endif
    @endif


@endsection
