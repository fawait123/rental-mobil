@extends('frontend.layouts.app')

@section('content')
    @include('frontend.layouts.breadcrumbs')
    <!-- WISHLIST AREA START -->
    <div class="ltn__checkout-area mb-100">
        <div class="container">
            <form action="{{ route('frontend.checkout.process') }}" method="post">
                <div class="row">
                    @csrf
                    <div class="col-lg-12">
                        <div class="ltn__checkout-inner">
                            <div class="ltn__checkout-single-content mt-50">
                                <h4 class="title-2">Billing Details</h4>
                                <div class="ltn__checkout-single-content-info">
                                    <h6>Personal Information</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" value="{{ $customer->name }}" name="name"
                                                    class="form-control  @error('name') is-invalid @enderror"
                                                    placeholder="Name">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="email" name="email" value="{{ $customer->email }}"
                                                    class="form-control  @error('email') is-invalid @enderror"
                                                    placeholder="email address">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-phone ltn__custom-icon">
                                                <input type="text" value="{{ $customer->telp }}" name="telp"
                                                    class="form-control  @error('telp') is-invalid @enderror"
                                                    placeholder="phone number">
                                                @error('telp')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="company" placeholder="Company name (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="company_address"
                                                    placeholder="Company address (optional)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <h6>Address</h6>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-item">
                                                        <input type="text" name="address"
                                                            value="{{ $customer->address }}"
                                                            class="form-control  @error('address') is-invalid @enderror"
                                                            placeholder="House number and street name">
                                                        @error('address')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <h6>City</h6>
                                            <div class="input-item">
                                                <input type="text" placeholder="City" name="city"
                                                    class="form-control  @error('city') is-invalid @enderror">
                                                @error('city')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <h6>Postal Code</h6>
                                            <div class="input-item">
                                                <input type="text" placeholder="Postal Code" name="postal_code"
                                                    class="form-control  @error('postal_code') is-invalid @enderror">
                                                @error('postal_code')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Order Notes (optional)</h6>
                                    <div class="input-item input-item-textarea ltn__custom-icon">
                                        <textarea name="note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ltn__checkout-payment-method mt-50">
                            <h4 class="title-2">Payment Method</h4>
                            <div id="checkout_accordion_1">
                                <!-- card -->
                                <div class="card">
                                    <h5 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2"
                                        aria-expanded="true"
                                        onclick="document.getElementById('payment').value = 'cash on delivery'">
                                        Cash on delivery
                                    </h5>
                                    <div id="faq-item-2-2" class="collapse show" data-bs-parent="#checkout_accordion_1">
                                        <div class="card-body">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card">
                                    <h5 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                        data-bs-target="#faq-item-2-3" aria-expanded="false"
                                        onclick="document.getElementById('payment').value = 'payment gateway'">
                                        Payment gateway <img src="{{ asset('assets/frontend/img/icons/payment-3.png') }}"
                                            alt="#">
                                    </h5>
                                    <div id="faq-item-2-3" class="collapse" data-bs-parent="#checkout_accordion_1">
                                        <div class="card-body">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                                account.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__payment-note mt-30 mb-30">
                                <p>Your personal data will be used to process your order, support your experience throughout
                                    this website, and for other purposes described in our privacy policy.</p>
                            </div>
                            <input type="text" name="payment" id="payment"
                                class="form-control @error('payment') is-invalid @enderror" readonly
                                value="cash on delivery">
                            @error('payment')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place
                                order</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping-cart-total mt-50">
                            <h4 class="title-2">Cart Totals</h4>
                            <table class="table">
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->name }}<strong>× {{ $item->quantity }} hour</strong></td>
                                            <td>{{ number_format(\Cart::getSubTotal(), 2, ',', '.') }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td><strong>Order Total</strong></td>
                                        <td><strong>{{ number_format(\Cart::getTotal(), 2, ',', '.') }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- WISHLIST AREA START -->
@endsection
