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
    @include('frontend.layouts.breadcrumbs')
    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="ltn__shop-details-inner">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ltn__shop-details-img-gallery ltn__shop-details-img-gallery-2">
                                    <div class="ltn__shop-details-small-img slick-arrow-2">
                                        <div class="single-small-img">
                                            <img src="{{ $property->car->picture }}" alt="Image">
                                        </div>
                                    </div>
                                    <div class="ltn__shop-details-large-img">
                                        <div class="single-large-img">
                                            <a href="img/product/1.png" data-rel="lightcase:myCollection">
                                                <img src="{{ $property->car->picture }}" alt="Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-product-info shop-details-info pl-0">
                                    <h3>{{ $property->car->name }}</h3>
                                    <div class="product-price-ratting mb-20">
                                        <ul>
                                            <li>
                                                <div class="product-price">
                                                    <span>Rp. {{ number_format($property->price, 2, ',', '.') }}</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="modal-product-brief">
                                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos repellendus
                                            repudiandae incidunt quidem pariatur expedita, quo quis modi tempore non.</p> --}}
                                        {!! $property->company->location !!}
                                    </div>

                                    <div class="ltn__product-details-menu-2 product-cart-wishlist-btn mb-30">
                                        <ul>
                                            <li>
                                                @if ($property->is_available == 0)
                                                    <a href="#" class="theme-btn-1 btn btn-effect-1 d-add-to-cart"
                                                        style="pointer-events: none">
                                                        <span>IN ORDER</span>
                                                    </a>
                                                @else
                                                    <a href="#" class="theme-btn-1 btn btn-effect-1 d-add-to-cart"
                                                        style="pointer-events: {{ count($transaction) > 0 ? 'none' : '' }}"
                                                        title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal"
                                                        data-picture="{{ $property->car->picture }}"
                                                        data-name="{{ $property->car->name }}" data-id={{ $property->id }}
                                                        data-price="{{ number_format($property->price, 2, ',', '.') }}">
                                                        <span>ADD TO CART</span>
                                                    </a>
                                                @endif
                                            </li>
                                            @if (auth()->user())
                                                <li>
                                                    <a href="{{ route('product.wishlist.add', $property->id) }}">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="modal-product-meta ltn__product-details-menu-1 mb-30">
                                        <ul>
                                            <li><strong>Available :</strong>
                                                <span>{{ $property->is_available == 1 ? 'Ready' : 'In Order' }}</span>
                                            </li>
                                            <li><strong>Transmisi :</strong> <span>{{ $property->car->transmisi }}</span>
                                            </li>
                                            <li><strong>Brand :</strong> <span>{{ $property->car->brand->name }}</span>
                                            </li>
                                            <li><strong>Type :</strong> <span>{{ $property->car->type->name }}</span></li>
                                            <li><strong>Number of Vehicles :</strong>
                                                <span>{{ $property->car->number_vehicles }}</span>
                                            </li>
                                            <li><strong>fuel :</strong> <span>{{ $property->car->fuel }}</span></li>
                                            <li><strong>Seat Capacity :</strong>
                                                <span>{{ $property->car->seat_capacity }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ltn__safe-checkout d-none">
                                        <h5>Guaranteed Safe Checkout</h5>
                                        <img src="img/icons/payment-2.png" alt="Payment Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->
@endsection
