@extends('layouts.app')

@section('content')
    <!-- PAGE TITLE
                    ================================================== -->
    <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
        data-background="{{ asset('assets/img/banner/page-title-01.jpg') }}">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="text-animation" data-in-effect="fadeInRight">Donate Now</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        @if ($apeal)
                            @if ($apeal->id)
                                <li><a href="">Donate Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
            <span class="square bg-primary"></span>
            <span class="square bg-secondary"></span>
        </div>
    </section>

    <!-- DONATE NOW
                    ================================================== -->
    <section>
        <div class="container">
            <div class="section-heading">
                <span class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation"
                    data-in-effect="fadeInRight">{{ $apeal->Title }}</span>
                <h2 class="mb-0">Make your Donation Here</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-1-6 p-lg-1-9 border border-color-extra-light-gray rounded">
                        <p class="font-weight-600 text-primary">How much would you like to donate ?</p>


                        <div class="mb-2-5">
                            <p class="font-weight-600 text-primary">Payment Method</p>
                            <div class="clearfix">
                                <div class="container">
                                    <div class="horizontaltab tab-style1">
                                        <ul class="resp-tabs-list hor_1">
                                            <li class="tab1"><span class="d-block">PAYPAL</span></li>
                                            <li class="tab2"><span class="d-block">WorldRemit</span></li>
                                            <li class="tab3"><span class="d-block">Credit or Debit Card
                                                    DOnation</span></li>
                                        </ul>
                                        <div class="resp-tabs-container hor_1">
                                            <div class="first">
                                                <div class="container">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6 mb-1-9 mb-lg-0">
                                                            <img src="{{ asset('assets/img/content/paypal.png') }}"
                                                                alt="..." class="rounded">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="ps-lg-1-9 ps-xl-2-5">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="second">
                                                <div class="container">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6 order-lg-1 order-2">
                                                            <div class="pe-lg-1-9 pe-xl-2-5">
                                                                <p class="font-weight-600 text-primary">Transaction
                                                                    Infomation</p>

                                                                <p>BANK NAME : CRDB BUKOBA BRANCH</p>
                                                                <p>ACCOUNT No. : 015C447130900</p>

                                                                <p>ACCOUNT NAME : The Awaited ONE HAND Organization</p>
                                                                <div class="quform-elements">

                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="quform-submit-inner">
                                                                                <a
                                                                                    href="https://www.worldremit.com/en/tanzania?amountfrom=100.00&selectfrom=gb&currencyfrom=gbp&selectto=tz&currencyto=tzs&transfer=bnk">
                                                                                    <button class="butn">Donate
                                                                                        Now</button></a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Submit button -->

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 order-lg-2 order-1 mb-1-9 mb-lg-0">
                                                            <img src="{{ asset('image/logo-world-remit.png') }}"
                                                                alt="..." class="rounded">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="third">
                                                <div class="container">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6 mb-1-9 mb-lg-0">
                                                            <img src="img/content/tab-content-03.jpg" alt="..."
                                                                class="rounded">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="ps-lg-1-9 ps-xl-2-5">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endif

@endsection
