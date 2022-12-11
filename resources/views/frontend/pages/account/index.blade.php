@extends('frontend.layouts.app')

@section('content')
    @include('frontend.layouts.breadcrumbs')

    <!-- WISHLIST AREA START -->
    <div class="liton__wishlist-area pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- PRODUCT TAB AREA START -->
                    <div class="ltn__product-tab-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="ltn__tab-menu-list mb-50">
                                        <div class="nav">
                                            <a class="active show" data-bs-toggle="tab" href="#liton_tab_1_1">Dashboard <i
                                                    class="fas fa-home"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_1_2">Recent Orders <i
                                                    class="fas fa-file-alt"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_1_3">Downloads <i
                                                    class="fas fa-arrow-down"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_1_4">Personal Info <i
                                                    class="fas fa-map-marker-alt"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_1_5">Account Details <i
                                                    class="fas fa-user"></i></a>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout
                                                <i class="fas fa-sign-out-alt"></i></a>
                                            <form action="{{ route('logout') }}" method="post" id="form-logout">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="liton_tab_1_1">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>Hello <strong>{{ auth()->user()->username }}</strong> (not
                                                    <strong>{{ auth()->user()->username }}</strong>? <small><a
                                                            href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Log
                                                            out</a></small> )
                                                </p>
                                                <p>From your account dashboard you can view your <span>recent orders</span>,
                                                    manage your <span>shipping and billing addresses</span>, and <span>edit
                                                        your password and account details</span>.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_1_2">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Invoice</th>
                                                                <th>Name</th>
                                                                <th>Start Order</th>
                                                                <th>End Order</th>
                                                                <th>Number of Days</th>
                                                                <th>Price</th>
                                                                <th>Total Price</th>
                                                                <th>Status Order</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($order as $item)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $item->invoice }}</td>
                                                                    <td>{{ $item->property->car->name }}</td>
                                                                    <td>{{ date('d M Y', strtotime($item->start_order)) }}
                                                                    </td>
                                                                    <td>{{ date('d M Y', strtotime($item->end_order)) }}
                                                                    </td>
                                                                    <td>{{ $item->number_of_days }}</td>
                                                                    <td>{{ number_format($item->price, 2, ',', '.') }}</td>
                                                                    <td>{{ number_format($item->total_price, 2, ',', '.') }}
                                                                    </td>
                                                                    <td style="text-transform: uppercase">
                                                                        <span
                                                                            class="badge bg-{{ $item->status == 'completed' ? 'success' : 'warning' }}">{{ $item->status }}</span>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_1_3">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Date</th>
                                                                <th>Expire</th>
                                                                <th>Download</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Carsafe - Car Service PSD Template</td>
                                                                <td>Nov 22, 2020</td>
                                                                <td>Yes</td>
                                                                <td><a href="#"><i
                                                                            class="far fa-arrow-to-bottom mr-1"></i>
                                                                        Download File</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Carsafe - Car Service HTML Template</td>
                                                                <td>Nov 10, 2020</td>
                                                                <td>Yes</td>
                                                                <td><a href="#"><i
                                                                            class="far fa-arrow-to-bottom mr-1"></i>
                                                                        Download File</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Carsafe - Car Service WordPress Theme</td>
                                                                <td>Nov 12, 2020</td>
                                                                <td>Yes</td>
                                                                <td><a href="#"><i
                                                                            class="far fa-arrow-to-bottom mr-1"></i>
                                                                        Download File</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_1_4">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>The following addresses will be used on the checkout page by default.</p>
                                                <div class="row">
                                                    <div class="col-md-12 col-12 learts-mb-30">
                                                        <img src="{{ $customer->picture }}" alt="">
                                                    </div>
                                                    <div class="col-md-6 col-12 learts-mb-30">
                                                        <h4>Address</h4>
                                                        <address>
                                                            <p>{{ $customer->address }}</p>
                                                        </address>
                                                    </div>
                                                    <div class="col-md-6 col-12 learts-mb-30">
                                                        <h4>Personal Info</h4>
                                                        <address>
                                                            <p><strong>{{ auth()->user()->name }}</strong></p>
                                                            <p><strong
                                                                    style="text-transform: uppercase">{{ $customer->identity_type }}</strong>.
                                                                {{ $customer->identity_number }}</p>
                                                            <p>Phone. {{ $customer->telp }}</p>
                                                            <p>Gender. {{ $customer->gender }}</p>
                                                            <p>Birthdate. {{ $customer->place }},
                                                                {{ $customer->birthdate }}</p>
                                                            <p>Email. {{ $customer->email }}</p>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_1_5">
                                            <div class="ltn__myaccount-tab-content-inner mb-50">
                                                <p>The following addresses will be used on the checkout page by default.</p>
                                                <div class="ltn__form-box">
                                                    <form action="#">
                                                        <div class="row mb-50">
                                                            <div class="col-md-12">
                                                                <label>First name:</label>
                                                                <input type="text" name="ltn__name"
                                                                    value="{{ auth()->user()->name }}" readonly>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Display Name:</label>
                                                                <input type="text" name="ltn__lastname"
                                                                    placeholder="Ethan"
                                                                    value="{{ auth()->user()->display_name }}" readonly>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Display Email:</label>
                                                                <input type="email" name="ltn__lastname"
                                                                    placeholder="example@example.com"
                                                                    value="{{ auth()->user()->email }}" readonly>
                                                            </div>
                                                        </div>
                                                        <fieldset>
                                                            <legend>Password change</legend>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label>Current password (leave blank to leave
                                                                        unchanged):</label>
                                                                    <input type="password" name="ltn__name">
                                                                    <label>New password (leave blank to leave
                                                                        unchanged):</label>
                                                                    <input type="password" name="ltn__lastname">
                                                                    <label>Confirm new password:</label>
                                                                    <input type="password" name="ltn__lastname">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="btn-wrapper">
                                                            <button type="submit"
                                                                class="btn theme-btn-1 btn-effect-1 text-uppercase">Save
                                                                Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCT TAB AREA END -->
                </div>
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->
@endsection
