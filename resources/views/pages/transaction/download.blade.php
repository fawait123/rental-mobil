@if (auth()->user()->is_active == false)
    @php
        Auth::logout();
    @endphp
    <script>
        window.location.href = '{{ route('login') }}'
    </script>
@endif
@php
    use App\Models\Company;
    $path = Request::path();
    $path = explode('/', $path);
    $company = Company::where('user_id', auth()->user()->id)->first();
@endphp
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StrikingDash</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/daterangepicker.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/fontawesome.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/footable.standalone.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/fullcalendar@5.2.0.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/jquery-jvectormap-2.0.5.css">

    <link rel="stylesheet"
        href="{{ asset('assets/backend/assets/vendor_assets') }}/css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/leaflet.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/line-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/MarkerCluster.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/MarkerCluster.Default.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/select2.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/slick.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/star-rating-svg.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/trumbowyg.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/wickedpicker.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/style.css') }}">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/backend/img') }}/favicon.png">
    <style>
        iframe {
            width: 100%;
            height: 200;
        }

        div.error span {
            color: red
        }
    </style>
    @livewireStyles
</head>

<body class="layout-light side-menu overlayScroll">
    {{-- <div class="mobile-search">
        <form class="search-form">
            <span data-feather="search"></span>
            <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
        </form>
    </div> --}}

    <div class="mobile-author-actions"></div>
    <header class="header-top">
        <nav class="navbar navbar-light">
            <div class="navbar-left">
                <a href="" class="sidebar-toggle">
                    <img class="svg" src="{{ asset('assets/backend/img') }}/svg/bars.svg" alt="img"></a>
                <a class="navbar-brand" href="#"><img class="dark"
                        src="{{ asset('assets/backend/img') }}/logo_dark.png" alt="svg"><img class="light"
                        src="{{ asset('assets/backend/img') }}/logo_white.png" alt="img"></a>
                {{-- <form action="/" class="search-form">
                    <span data-feather="search"></span>
                    <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
                </form> --}}
                @include('layouts.navigation-top')
            </div>
            <!-- ends: navbar-left -->

            <div class="navbar-right">
                <ul class="navbar-right__menu">
                    <li class="nav-search d-none">
                        <a href="#" class="search-toggle">
                            <i class="la la-search"></i>
                            <i class="la la-times"></i>
                        </a>
                        <form action="/" class="search-form-topMenu">
                            <span class="search-icon" data-feather="search"></span>
                            <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
                        </form>
                    </li>
                    <!-- ends: nav-message -->
                    <li class="nav-notification">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="bell"></span></a>
                            <div class="dropdown-wrapper">
                                <h2 class="dropdown-wrapper__title">Notifications <span
                                        class="badge-circle badge-warning ml-1">4</span></h2>
                                <ul>
                                    <li
                                        class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--primary">
                                            <span data-feather="inbox"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--secondary">
                                            <span data-feather="upload"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--success">
                                            <span data-feather="log-in"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--info">
                                            <span data-feather="at-sign"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--danger">
                                            <span data-feather="heart"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="" class="dropdown-wrapper__more">See all incoming activity</a>
                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-flag-select -->
                    <li class="nav-author">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle"><img
                                    src="{{ asset('assets/backend/img') }}/author-nav.jpg" alt=""
                                    class="rounded-circle"></a>
                            <div class="dropdown-wrapper">
                                <div class="nav-author__info">
                                    <div class="author-img">
                                        <img src="{{ asset('assets/backend/img') }}/author-nav.jpg" alt=""
                                            class="rounded-circle">
                                    </div>
                                    <div>
                                        <h6>{{ auth()->user()->display_name }}</h6>
                                        <span>{{ auth()->user()->role }}</span>
                                    </div>
                                </div>
                                <div class="nav-author__options">
                                    <ul>
                                        <li>
                                            <a href="">
                                                <span data-feather="user"></span> Profile</a>
                                        </li>
                                    </ul>
                                    <a href="" data-toggle="modal" data-target="#modal-info-confirmed"
                                        class="nav-author__signout">
                                        <span data-feather="log-out"></span> Sign Out</a>
                                </div>
                            </div>
                            <!-- ends: .dropdown-wrapper -->
                        </div>
                    </li>
                    <!-- ends: .nav-author -->
                </ul>
                <!-- ends: .navbar-right__menu -->
                <div class="navbar-right__mobileAction d-md-none">
                    <a href="#" class="btn-search">
                        <span data-feather="search"></span>
                        <span data-feather="x"></span></a>
                    <a href="#" class="btn-author-action">
                        <span data-feather="more-vertical"></span></a>
                </div>
            </div>
            <!-- ends: .navbar-right -->
        </nav>
    </header>
    <main class="main-content">
        <div class="contents">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-invoice global-shadow border bg-white radius-xl w-100 mb-30">
                            <div class="payment-invoice__body">
                                <div class="payment-invoice-address d-flex justify-content-sm-between">
                                    <div class="payment-invoice-logo">
                                        <a href="index.html"><img class="svg dark" src="img/logo_dark.svg"
                                                alt=""></a>
                                    </div>
                                    <div class="payment-invoice-address__area">
                                        <address>{{ $company->name }}<br> {{ $company->address }}<br>
                                            {{ $company->email }}<br>
                                            Phone : {{ $company->telp }}</address>
                                    </div>
                                </div><!-- End: .payment-invoice-address -->
                                <div
                                    class="payment-invoice-qr d-flex justify-content-between mb-40 px-xl-50 px-30 py-sm-30 py-20 ">
                                    <div class="d-flex justify-content-center mb-lg-0 mb-25">
                                        <div class="payment-invoice-qr__number">
                                            <div class="display-3">
                                                Invoice
                                            </div>
                                            <p>No : <span>#{{ $transaction->invoice }}</span></p>
                                            <p>Start Order :
                                                <span>{{ date('d M Y', strtotime($transaction->start_order)) }}</span>
                                            </p>
                                            <p>End Order :
                                                <span>{{ date('d M Y', strtotime($transaction->end_order)) }}</span>
                                            </p>
                                            <p>Status : <span>{{ $transaction->status }}</span></p>
                                        </div>
                                    </div><!-- End: .d-flex -->
                                    <div class="d-flex justify-content-center mb-lg-0 mb-25">
                                        <div class="payment-invoice-qr__code bg-white radius-xl p-20">
                                            <p>Payment Method : {{ $transaction->payment->type }}</p>
                                            <p>Payment Status : {{ $transaction->payment->status }}</p>
                                        </div>
                                    </div><!-- End: .d-flex -->
                                    <div class="d-flex justify-content-center">
                                        <div class="payment-invoice-qr__address">
                                            <p>Invoice To:</p>
                                            <span>{{ $transaction->name }}</span><br>
                                            <span>{{ $transaction->customer->address }}</span><br>
                                            <span>{{ $transaction->customer->telp }}</span><br>
                                            <span>{{ $transaction->customer->email }}</span>
                                        </div>
                                    </div><!-- End: .d-flex -->
                                </div><!-- End: .payment-invoice-qr -->
                                <div class="payment-invoice-table">
                                    <div class="table-responsive">
                                        <table id="cart" class="table table-borderless">
                                            <thead>
                                                <tr class="product-cart__header">
                                                    <th scope="col">#</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col" class="text-right">Price Per Unit</th>
                                                    <th scope="col" class="text-right">Number Of Days</th>
                                                    <th scope="col" class="text-right">Order Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td class="Product-cart-title">
                                                        <div class="media  align-items-center">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">
                                                                    {{ $transaction->property->car->name }}</h5>
                                                                <div>
                                                                    <p>Number
                                                                        vehicles:<span>{{ $transaction->property->car->number_vehicles }}</span>
                                                                    </p>
                                                                    <p>color:<span>{{ $transaction->property->car->color }}</span>
                                                                    </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="unit text-right">
                                                        {{ number_format($transaction->price, 2, ',', '.') }}
                                                    </td>
                                                    <td class="invoice-quantity text-right">
                                                        {{ $transaction->number_of_days }}</td>
                                                    <td class="text-right order">
                                                        {{ number_format($transaction->total_price, 2, ',', '.') }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td class="order-summery float-right">
                                                        <div class="total">
                                                            <div class="subtotalTotal mb-0 text-right">
                                                                Subtotal :
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="total-money d-flex justify-content-between align-items-center mt-2 text-right float-right">
                                                            <h6>Total :</h6>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="total-order float-right text-right fs-14 fw-500">
                                                            <p>Rp.
                                                                {{ number_format($transaction->total_price, 2, ',', '.') }}
                                                            </p>
                                                            <h5 class="text-primary">
                                                                Rp.
                                                                {{ number_format($transaction->total_price, 2, ',', '.') }}
                                                            </h5>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div><!-- End: .payment-invoice-table -->
                            </div><!-- End: .payment-invoice__body -->
                        </div><!-- End: .payment-invoice -->
                    </div><!-- End: .col -->
                </div>
            </div>

        </div>
    </main>
    {{-- <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div> --}}
    <div class="overlay-dark-sidebar"></div>
    <div class="notification-wrapper top-right"></div>
    {{-- modal --}}
    <div class="modal-info-confirmed modal fade show" id="modal-info-confirmed" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-info" role="document">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-info-body d-flex">
                            <div class="modal-info-icon warning">
                                <span data-feather="info"></span>
                            </div>

                            <div class="modal-info-text">
                                <h6>Apakah anda yakin ingin keluar ? </h6>
                                <p>Keluar Sekarang.</p>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light btn-outlined btn-sm"
                            data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info btn-sm">Ok</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- ends: .modal-info-confirmed -->
    {{-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script> --}}
    <!-- inject:js-->
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery/jquery-ui.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/bootstrap/popper.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/moment/moment.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/accordion.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/autoComplete.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/Chart.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/charts.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/daterangepicker.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/drawer.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/dynamicBadge.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/dynamicCheckbox.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/feather.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/footable.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/fullcalendar@5.2.0.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/google-chart.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.filterizr.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.peity.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.star-rating-svg.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/leaflet.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/leaflet.markercluster.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/loader.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/message.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/moment.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/muuri.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/notification.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/popover.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/select2.full.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/slick.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/trumbowyg.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/wickedpicker.min.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/drag-drop.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/footable.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/full-calendar.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/googlemap-init.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/icon-loader.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/jvectormap-init.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/leaflet-init.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <!-- endinject-->


    @if ($message = Session::get('message'))
        <script>
            showNotificationCustom("warning", "alert-circle", "close", "Information", "{{ $message }}");
        </script>
    @endif

    @if ($message = Session::get('success'))
        <script>
            showNotificationCustom("warning", "alert-circle", "close", "Success", "{{ $message }}");
        </script>
    @endif

    @if ($message = Session::get('error'))
        <script>
            showNotificationCustom("warning", "alert-circle", "close", "Error", "{{ $message }}");
        </script>
    @endif

    @livewireScripts
    @stack('customjs')
    <script>
        window.print()
    </script>
</body>

</html>
