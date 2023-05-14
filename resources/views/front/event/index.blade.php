@extends('layouts.app')

@section('content')
        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4" data-background="{{asset('assets/img/banner/page-title-01.jpg')}}">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1 class="text-animation" data-in-effect="fadeInRight">Our Events </h1>
                        <ul>
                            <li><a href="{{url('')}}">Home</a></li>
                            <li><a href="#">Events</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
                <span class="square bg-primary"></span>
                <span class="square bg-secondary"></span>
            </div>
        </section>

        <!-- EVENT
        ================================================== -->
        <section>
            <div class="container">
                <div class="section-heading">
                    <span class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation" data-in-effect="fadeInRight">upcoming events</span>
                    <h2>Our events</h2>
                </div>
                <div class="row mt-n1-9">
                    @if (count($events)>0)
                    @foreach ($events as $item)
                         <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                        <div class="card card-style1 border-color-extra-light-gray h-100">
                            <img src="{{$item->getFirstMediaUrl('events','thumb')}}" class="card-img-top" alt="...">
                            <div class="card-body px-1-6 px-sm-1-9 pb-1-9 pt-2-4 position-relative">
                                <span class="card-btn">{{ $item->date }}</span>
                                <div class="text-secondary small font-weight-600"><i class="ti-time me-2"></i> {{ $item->time }}- 11:00 am</div>
                                <h3 class="h4 mb-3"><a href="{{ url('event/' . $item->id) }}">{{ $item->Title }}</a></h3>
                                <p>{{ $item->meta }}</p>
                                <a href="{{ url('event/'. $item->id) }}" class="butn-read"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                        
                    @endif
                   
                   
                </div>
                <div class="row wow fadeIn" data-wow-delay="400ms">
                    <div class="col-sm-12">
                        <!-- start pager  -->
                        <div class="text-center mt-2-3 mt-lg-6">
                            <div class="pagination text-extra-dark-gray">
                                <ul>
                                    <li><a href="#!"><i class="fas fa-long-arrow-alt-left mr-1 d-none d-sm-inline-block"></i> Prev</a></li>
                                    <li class="active"><a href="#!">1</a></li>
                                    <li><a href="#!">2</a></li>
                                    <li><a href="#!">3</a></li>
                                    <li><a href="#!">Next <i class="fas fa-long-arrow-alt-right ms-1 d-none d-sm-inline-block"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end pager -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end event grid section -->
@endsection