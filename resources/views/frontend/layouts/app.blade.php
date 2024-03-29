<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EasyCarRent -
        @if (request()->path() == '/')
            {{ 'Home' }}
        @else
            @foreach (explode('/', request()->path()) as $item)
                {{ ucfirst($item) }}
            @endforeach
        @endif
    </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('') }}logo.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/toastr.min.css">
    <style>
        .has-errors {
            border-color: red;
        }
    </style>
</head>

<body>
    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-3) -->
        <header class="ltn__header-area ltn__header-3 section-bg-6">
            <!-- ltn__header-middle-area start -->
            <div class="ltn__header-middle-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo">
                                <a href="{{ route('welcome') }}"><img src="{{ asset('') }}logo.png" width="60px"
                                        alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col header-contact-serarch-column d-none d-xl-block">
                            <div class="header-contact-search">
                                <!-- header-feature-item -->
                                <div class="header-feature-item">
                                    <div class="header-feature-icon">
                                        <i class="icon-phone"></i>
                                    </div>
                                    <div class="header-feature-info">
                                        <h6>Phone</h6>
                                        <p><a href="tel:0123456789">+0123-456-789</a></p>
                                    </div>
                                </div>
                                <!-- header-search-2 -->
                                <div class="header-search-2">
                                    {{-- <form id="#123" method="get" action="#">
                                        <input type="text" name="search" value=""
                                            placeholder="Search here..." />
                                        <button type="submit">
                                            <span><i class="icon-magnifier"></i></span>
                                        </button>
                                    </form> --}}
                                    {{-- Welcome, --}}
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <!-- header-options -->
                            <div class="ltn__header-options">
                                <ul>
                                    <li class="d-none">
                                        <!-- ltn__currency-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu">
                                            <ul>
                                                <li><a href="#" class="dropdown-toggle"><span
                                                            class="active-currency">USD</span></a>
                                                    <ul>
                                                        <li><a href="login.html">USD - US Dollar</a></li>
                                                        <li><a href="wishlist.html">CAD - Canada Dollar</a></li>
                                                        <li><a href="register.html">EUR - Euro</a></li>
                                                        <li><a href="account.html">GBP - British Pound</a></li>
                                                        <li><a href="wishlist.html">INR - Indian Rupee</a></li>
                                                        <li><a href="wishlist.html">BDT - Bangladesh Taka</a></li>
                                                        <li><a href="wishlist.html">JPY - Japan Yen</a></li>
                                                        <li><a href="wishlist.html">AUD - Australian Dollar</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="d-none">
                                        <!-- header-search-1 -->
                                        <div class="header-search-wrap">
                                            <div class="header-search-1">
                                                <div class="search-icon">
                                                    <i class="icon-magnifier  for-search-show"></i>
                                                    <i class="icon-magnifier-remove  for-search-close"></i>
                                                </div>
                                            </div>
                                            <div class="header-search-1-form">
                                                <form id="#" method="get" action="#">
                                                    <input type="text" name="search" value=""
                                                        placeholder="Search here..." />
                                                    <button type="submit">
                                                        <span><i class="icon-magnifier"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-none">
                                        <!-- user-menu -->
                                        <div class="ltn__drop-menu user-menu">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon-user"></i></a>
                                                    <ul>
                                                        <li><a href="login.html">Sign in</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="account.html">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    @if (auth()->user())
                                        <li>
                                            <!-- mini-cart 2 -->
                                            <div class="mini-cart-icon mini-cart-icon-2">
                                                <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                                    <span class="mini-cart-icon">
                                                        <i class="icon-handbag"></i>
                                                        <sup>{{ count($transaction) }}</sup>
                                                    </span>
                                                    <h6><span class="ltn__secondary-color">
                                                            {{ auth()->user()->display_name }}</span></h6>
                                                </a>
                                            </div>
                                        </li>
                                    @endif
                                    <li>
                                        <!-- Mobile Menu Button -->
                                        <div class="mobile-menu-toggle d-lg-none">
                                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                                <svg viewBox="0 0 800 600">
                                                    <path
                                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                                        id="top"></path>
                                                    <path d="M300,320 L540,320" id="middle"></path>
                                                    <path
                                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                                        id="bottom"
                                                        transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->

            <!-- header-bottom-area start -->
            <div
                class="header-bottom-area ltn__border-top ltn__header-sticky  ltn__sticky-bg-white ltn__primary-bg---- menu-color-white---- d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col header-menu-column justify-content-center">
                            <div class="sticky-logo">
                                <div class="site-logo">
                                    <a href="index.html"><img src="{{ asset('assets/frontend/img') }}/logo.png"
                                            alt="Logo"></a>
                                </div>
                            </div>
                            <div class="header-menu header-menu-2">
                                <nav>
                                    <div class="ltn__main-menu">
                                        @include('frontend.layouts.navigation')
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-bottom-area end -->
        </header>
        <!-- HEADER AREA END -->

        <!-- Utilize Cart Menu Start -->
        <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <span class="ltn__utilize-menu-title">Active Transaction</span>
                    <button class="ltn__utilize-close">×</button>
                </div>
                @foreach ($transaction as $item)
                    <div class="mini-cart-product-area ltn__scrollbar">
                        <div class="mini-cart-item clearfix">
                            <div class="mini-cart-img">
                                <a href="#"><img src="{{ $item->property->car->picture }}" alt="Image"></a>
                                <span class="mini-cart-item-delete" onclick="window.location.href='/'"><i
                                        class="icon-trash"></i></span>
                            </div>
                            <div class="mini-cart-info">
                                <h6><a href="#">{{ $item->property->car->name }}</a></h6>
                                <span class="mini-cart-quantity">{{ $item->number_of_days }} x Rp.
                                    {{ number_format($item->price, 2, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="mini-cart-footer">
                        @foreach ($item->payment->detail as $row)
                            @if ($row->type == 'payment gateway')
                                <p>Payment Detail</p>
                                <div class="mini-cart-sub-total">
                                    <h5>Nominal : <span class="text-secondary text-sm">Rp.
                                            {{ number_format($row->midtrans->gross_amount, 2, ',', '.') }}</span></h5>
                                </div>
                                <div class="mini-cart-sub-total">
                                    <h5>Bank Transfer : <span class="text-secondary text-sm"
                                            style="text-transform: uppercase">{{ $row->midtrans->bank }}</span></h5>
                                </div>
                                <div class="mini-cart-sub-total">
                                    <h5>VA Number : <span
                                            class="text-secondary text-sm">{{ $row->midtrans->va_number }}</span></h5>
                                </div>
                                <div class="mini-cart-sub-total">
                                    <h5>Transaction Status : <span
                                            class="text-secondary text-sm">{{ $row->midtrans->transaction_status }}</span>
                                    </h5>
                                </div>
                                <div class="mini-cart-sub-total">
                                    <h5>Expired : <span
                                            class="text-secondary text-sm">{{ $row->midtrans->expire_time }}</span>
                                    </h5>
                                </div>
                            @else
                                <div class="mini-cart-sub-total">
                                    <h5>Subtotal: <span>Rp. {{ number_format($row->nominal, 2, ',', '.') }}</span></h5>
                                </div>
                                <div class="mini-cart-sub-total">
                                    <h5>Payment Type: <span class="text-secondary">{{ $item->payment->type }}</span>
                                    </h5>
                                </div>
                                <div class="mini-cart-sub-total">
                                    <h5>Status Payment: <span
                                            class="text-{{ $row->status == 'paid' ? 'success' : 'danger' }}">{{ $row->status }}</span>
                                    </h5>
                                </div>
                                <div class="mini-cart-sub-total">
                                    <h5>Note: <span class="text-secondary text-sm">{{ $row->note }}</span></h5>
                                </div>
                                @if ($item->payment->type == 'payment gateway')
                                    <div class="btn-wrapper">
                                        <a href="{{ route('frontend.pay', $row->id) }}"
                                            class="theme-btn-1 btn btn-effect-1">Pay Now</a>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                        <br>
                        <br>
                        <p>Click pay to make payment</p>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Utilize Cart Menu End -->

        @yield('content')

        <!-- FOOTER AREA START -->
        <footer class="ltn__footer-area ">
            <div class="footer-top-area  section-bg-5">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Quick Links</h4>
                                <div class="footer-menu">
                                    @include('frontend.layouts.navigation')
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-about-widget">
                                <h4 class="footer-title">About Me</h4>
                                <div class="footer-logo d-none">
                                    <div class="site-logo">
                                        <img src="{{ asset('assets/frontend/img') }}/logo.png" alt="Logo">
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo incididunt ut
                                    labore et dolore</p>
                                <div class="footer-address">
                                    <ul>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-location-pin"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p>Brooklyn, New York, United States</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-phone"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><a href="tel:+0123-456789">+0123-456789</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-envelope"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><a href="mailto:example@example.com">example@example.com</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ltn__social-media mt-20 d-none">
                                    <ul>
                                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                                        </li>
                                        <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-payment-img">
                                    <img src="{{ asset('assets/frontend/img') }}/icons/payment-6.png"
                                        alt="Payment Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ltn__copyright-area ltn__copyright-2 section-bg-5">
                <div class="container ltn__border-top-2">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="footer-copyright-left">
                                <div class="ltn__copyright-design clearfix">
                                    <p>&copy; <span class="current-year"></span> - EasyCarRent</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 align-self-center">
                            <div class="footer-copyright-right text-right">
                                <div class="ltn__copyright-menu d-none">
                                    <ul>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Claim</a></li>
                                        <li><a href="#">Privacy & Policy</a></li>
                                    </ul>
                                </div>
                                <div class="ltn__social-media ">
                                    <ul>
                                        <li><a href="#" title="Facebook"><i
                                                    class="icon-social-facebook"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a>
                                        </li>
                                        <li><a href="#" title="Pinterest"><i
                                                    class="icon-social-pinterest"></i></a></li>
                                        <li><a href="#" title="Instagram"><i
                                                    class="icon-social-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER AREA END -->

        <!-- MODAL AREA START (Quick View Modal) -->
        <div class="ltn__modal-area ltn__quick-view-modal-area">
            <div class="modal fade" id="quick_view_modal" tabindex="-1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <!-- <i class="fas fa-times"></i> -->
                            </button>
                        </div>
                        <div class="modal-body" id="modal-preview">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL AREA END -->

        <!-- MODAL AREA START (Checkout Modal) -->
        <div class="ltn__modal-area ltn__add-to-cart-modal-area">
            <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="ltn__quick-view-modal-inner">
                                <div class="modal-product-item">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="modal-add-to-cart-content clearfix" id="data-modal-body">
                                                <div class="modal-product-img">
                                                    <img src="{{ asset('assets/frontend/img') }}/product/1.png"
                                                        alt="#">
                                                </div>
                                                <div class="modal-product-info">
                                                    <h5><a href="product-details.html">Heart's Desire</a></h5>
                                                    <p class="added-cart"><i class="fa fa-check-circle"></i>
                                                        Successfully added to your Cart</p>
                                                    <div class="btn-wrapper">
                                                        <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View
                                                            Cart</a>
                                                        <a href="checkout.html"
                                                            class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- additional-info -->
                                            <div class="additional-info d-none--">
                                                <div class="payment-method">
                                                    <img src="{{ asset('assets/frontend/img') }}/icons/payment.png"
                                                        alt="#">
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
        <!-- MODAL AREA END -->

        <!-- MODAL AREA START (Wishlist Modal) -->
        <div class="ltn__modal-area ltn__add-to-cart-modal-area">
            <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="ltn__quick-view-modal-inner">
                                <div class="modal-product-item">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="modal-product-img">
                                                <img src="{{ asset('assets/frontend/img') }}/product/7.png"
                                                    alt="#">
                                            </div>
                                            <div class="modal-product-info">
                                                <h5><a href="product-details.html">Brake Conversion Kit</a></h5>
                                                <p class="added-cart"><i class="fa fa-check-circle"></i>
                                                    Successfully added to your Wishlist</p>
                                                <div class="btn-wrapper">
                                                    <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View
                                                        Wishlist</a>
                                                </div>
                                            </div>
                                            <!-- additional-info -->
                                            <div class="additional-info d-none">
                                                <p>We want to give you <b>10% discount</b> for your first order, <br>
                                                    Use discount code at checkout</p>
                                                <div class="payment-method">
                                                    <img src="{{ asset('assets/frontend/img') }}/icons/payment.png"
                                                        alt="#">
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
        <!-- MODAL AREA END -->

    </div>
    <!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <script src="{{ asset('assets/frontend/toastr.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // modal on Checkout
            $('#add_to_cart_modal').on('show.bs.modal', function(e) {
                let target = e.relatedTarget
                let picture = $(target).data('picture');
                let name = $(target).data('name');
                let id = $(target).data('id');
                let price = $(target).data('price');
                let html = `
                <div class="modal-product-img">
                                                    <img src="${picture}"
                                                        alt="#">
                                                </div>
                                                <div class="modal-product-info">
                                                    <h5><a href="#">${name}</a></h5>
                                                    <p class="added-cart"><i class="fa fa-check-circle"></i>
                                                        Rp. ${price}</p>
                                                    <div class="btn-wrapper">
                                                        <form action="{{ route('frontend.checkout.action') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="id" value="${id}" />
                                                            <div class="form-group">
                                                                <label>Start Date</label>
                                                                <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" min="{{ date('Y-m-d') }}" required />
                                                                @error('start_date')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label>End Date</label>
                                                                <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="end_date" min="{{ date('Y-m-d') }}"  required />
                                                                @error('end_date')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <button
                                                            class="theme-btn-2 btn btn-effect-2">Checkout</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                `
                $("#data-modal-body").html(html)
                console.log(name)
            })
            // modal detail product
            $('#quick_view_modal').on('show.bs.modal', function(e) {
                let target = e.relatedTarget
                let picture = $(target).data('picture');
                let id = $(target).data('id');
                let name = $(target).data('name');
                let price = $(target).data('price');
                let transmisi = $(target).data('transmisi');
                let color = $(target).data('color');
                let fuel = $(target).data('fuel');
                let seat_capacity = $(target).data('seat_capacity');
                console.log(id)
                let route = "{{ route('product.detail', '__row') }}"
                route = route.replace('__row', id)
                let html = `
                <div class="ltn__quick-view-modal-inner">
                                <div class="modal-product-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="modal-product-img">
                                                <img src="${picture}"
                                                    alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="modal-product-info shop-details-info pl-0">
                                                <h3>${name}</h3>
                                                <div class="product-price-ratting mb-20">
                                                    <ul>
                                                        <li>
                                                            <div class="product-price">
                                                                <span>Rp. ${price}</span>
                                                                <span>Rp. ${price}</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="product-ratting">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="icon-star"></i></a></li>
                                                                    <li><a href="#"><i
                                                                                class="icon-star"></i></a></li>
                                                                    <li><a href="#"><i
                                                                                class="icon-star"></i></a></li>
                                                                    <li><a href="#"><i
                                                                                class="icon-star"></i></a></li>
                                                                    <li><a href="#"><i
                                                                                class="icon-star"></i></a></li>
                                                                    <li class="review-total"> <a href="#"> (
                                                                            95 Reviews )</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="modal-product-brief">
                                                    <div class="row">
                                                       <div class="col-6">
                                                        <ul class="list-group">
                                                            <li class="list-group-item">Fuel</li>
                                                            <li class="list-group-item">Seat Capacity</li>
                                                            <li class="list-group-item">Transmisi</li>
                                                            <li class="list-group-item">Color</li>
                                                        </ul>
                                                        </div>
                                                       <div class="col-6">
                                                        <ul class="list-group">
                                                            <li class="list-group-item">${fuel}</li>
                                                            <li class="list-group-item">${seat_capacity}</li>
                                                            <li class="list-group-item">${transmisi}</li>
                                                            <li class="list-group-item">${color}</li>
                                                        </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="ltn__product-details-menu-2 product-cart-wishlist-btn mb-30">
                                                    <ul>
                                                        <li>
                                                            <a href="${route}" class="theme-btn-1 btn btn-effect-1 d-add-to-cart"
                                                                title="Checkout">
                                                                <span>Detail</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="ltn__safe-checkout d-none">
                                                    <h5>Guaranteed Safe Checkout</h5>
                                                    <img src="{{ asset('assets/frontend/img') }}/icons/payment-2.png"
                                                        alt="Payment Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                `;
                $("#modal-preview").html(html)
            })
        })
    </script>
    @if ($message = Session::get('message'))
        <script>
            toastr.info('{{ $message }}')
        </script>
    @endif

    @if ($message = Session::get('success'))
        <script>
            toastr.success('{{ $message }}')
        </script>
    @endif

    @if ($message = Session::get('error'))
        <script>
            toastr.error('{{ $message }}')
        </script>
    @endif

</body>

</html>
