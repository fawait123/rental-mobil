@extends('frontend.layouts.app')

@section('content')
    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="index.html"><img src="{{ asset('') }}logo.png" alt="Logo" width="60px"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu">
                @include('frontend.layouts.navigation')
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- SLIDER AREA START (slider-6) -->
    @include('frontend.layouts.slider')
    <!-- SLIDER AREA END -->

    <!-- FEATURE AREA START ( Feature - 3) -->
    <div class="ltn__feature-area mt-100 mt--65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border section-bg-6 position-relative">
                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="{{ asset('assets/frontend/img') }}/icons/svg/8-trolley.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>Free shipping</h4>
                                <p>On all orders over $49.00</p>
                            </div>
                        </div>
                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="{{ asset('assets/frontend/img') }}/icons/svg/9-money.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>15 days returns</h4>
                                <p>Moneyback guarantee</p>
                            </div>
                        </div>
                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="{{ asset('assets/frontend/img') }}/icons/svg/10-credit-card.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>Secure checkout</h4>
                                <p>Protected by Paypal</p>
                            </div>
                        </div>
                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="{{ asset('assets/frontend/img') }}/icons/svg/11-gift-card.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>Offer & gift here</h4>
                                <p>On all orders over</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- BANNER AREA START -->
    <div class="ltn__banner-area  mt-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="{{ asset('assets/frontend/banner/1.jpg') }}" target="blank"><img
                                    src="{{ asset('assets/frontend/banner/1.jpg') }}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="{{ asset('assets/frontend/banner/2.jpg') }}" target="blank"><img
                                    src="{{ asset('assets/frontend/banner/2.jpg') }}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="{{ asset('assets/frontend/banner/3.jpg') }}" target="blank"><img
                                    src="{{ asset('assets/frontend/banner/3.jpg') }}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER AREA END -->
    @include('frontend.layouts.brand')

    <!-- BANNER AREA START -->
    <div class="ltn__banner-area ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="{{ asset('assets/frontend/banner/left.jpg') }}" target="blank"><img
                                    src="{{ asset('assets/frontend/banner/left.jpg') }}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="{{ asset('assets/frontend/banner/right.jpg') }}" target="blank"><img
                                    src="{{ asset('assets/frontend/banner/right.jpg') }}" width="100%"
                                    alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER AREA END -->

    @include('frontend.layouts.top-product')

    <!-- BANNER AREA START -->
    <div class="ltn__banner-area ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="{{ asset('assets/frontend/banner/bottom.jpg') }}" target="blank"><img
                                    src="{{ asset('assets/frontend/banner/bottom.jpg') }}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER AREA END -->
@endsection
