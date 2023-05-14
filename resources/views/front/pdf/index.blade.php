@extends('layouts.app')

@section('content')
    <!-- PAGE TITLE
                        ================================================== -->
    <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
        data-background="{{ asset('assets/img/banner/page-title-01.jpg') }}">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="text-animation" data-in-effect="fadeInRight">Testmonies and (PDF)</h1>
                    <ul>
                        <li><a href="{{ url('') }}">Home</a></li>
                        <li><a href="#!">Apeal Testmonies</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
            <span class="square bg-primary"></span>
            <span class="square bg-secondary"></span>
        </div>
    </section>

    <!-- FAQ
                        ================================================== -->
    <section>
        <div class="container">
            <div class="section-heading">
                <span class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation"
                    data-in-effect="fadeInRight">Testmonies</span>
                <h2 class="mb-0">Download and Read Testimonies for different apeals</h2>
            </div>

            <div class="">

                <div class="col-lg-7 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                    <div id="accordion" class="accordion-style">
                        @if (count($pdf))
                            @foreach ($pdf as $item)
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link main-font fw-bold" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                {{ $item->Title }}
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <a href="{{url('pdf/'.$item->id) }}">(PDF)</a>
                                            {!! $item->Descr !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
