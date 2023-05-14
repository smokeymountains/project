@extends('layouts.app')

@section('content')
        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4" data-background="{{asset('assets/img/banner/page-title-01.jpg')}}">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1 class="text-animation" data-in-effect="fadeInRight">Gallery</h1>
                        <ul>
                            <li><a href="{{url('')}}">Home</a></li>
                            <li><a href="#!">Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
                <span class="square bg-primary"></span>
                <span class="square bg-secondary"></span>
            </div>
        </section>

        <!-- GALLERY
        ================================================== -->
        <section>
            <div class="container lg-container">
                <div class="section-heading">
                    <span class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation" data-in-effect="fadeInRight">our gallery</span>
                    <h2>Gallery of our works </h2>
                </div>
                <div class="row">
                    <div class="filtering col-sm-12 text-center">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.charity'>Causes</span>
                        <span data-filter='.medical'>Apeal</span>
                        <span data-filter='.education'>Blog</span>
                        <span data-filter='.other'>Events</span>
                    </div>
                </div>
                <div class="text-center portfolio-gallery-isotope row">
                    @foreach ($event as $item )
                        <div class="col-md-6 col-lg-4 mb-1-9 other" data-src="{{ $item->getFirstMediaUrl('events','thumb') }}" data-sub-html="<h4 class='text-white'>Gallery #01</h4>">
                        <div class="gallery-block">
                            <img src="{{ $item->getFirstMediaUrl('events','thumb') }}" alt="..." class="rounded">
                            <div class="gallery-overlay">
                                <div class="d-table w-100 h-100 overflow-hidden">
                                    <div class="d-table-cell align-middle">
                                        <div class="gallery-btn">
                                            <a href="#!"><i class="ti-zoom-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    @foreach ($apeal as $item)
                         <div class="col-md-6 col-lg-4 mb-1-9 medical" data-src="{{ $item->getFirstMediaUrl('apeal','thumb') }}" data-sub-html="<h4 class='text-white'>Gallery #02</h4>">
                        <div class="gallery-block">
                            <img src="{{ $item->getFirstMediaUrl('apeal','thumb') }}" alt="..." class="rounded">
                            <div class="gallery-overlay">
                                <div class="d-table w-100 h-100 overflow-hidden">
                                    <div class="d-table-cell align-middle">
                                        <div class="gallery-btn">
                                            <a href="#!"><i class="ti-zoom-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                   
                     @foreach ($blog as $item)
                        <div class="col-md-6 col-lg-4 mb-1-9 education" data-src="{{ $item->getFirstMediaUrl('blog','thumb') }}" data-sub-html="<h4 class='text-white'>Gallery #05</h4>">
                        <div class="gallery-block">
                            <img src="{{ $item->getFirstMediaUrl('blog','thumb') }}" alt="..." class="rounded">
                            <div class="gallery-overlay">
                                <div class="d-table w-100 h-100 overflow-hidden">
                                    <div class="d-table-cell align-middle">
                                        <div class="gallery-btn">
                                            <a href="#!"><i class="ti-zoom-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                     @foreach ($causes as $item)
                        <div class="col-md-6 col-lg-4 mb-1-9 charity" data-src="{{ $item->getFirstMediaUrl('causes','thumb') }}" data-sub-html="<h4 class='text-white'>Gallery #06</h4>">
                        <div class="gallery-block">
                            <img src="{{ $item->getFirstMediaUrl('causes','thumb') }}" alt="..." class="rounded">
                            <div class="gallery-overlay">
                                <div class="d-table w-100 h-100 overflow-hidden">
                                    <div class="d-table-cell align-middle">
                                        <div class="gallery-btn">
                                            <a href="#!"><i class="ti-zoom-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                   
                    
                </div>
            </div>
        </section>
@endsection