@extends('frontend.layouts.app')

@section('content')
    @include('frontend.layouts.breadcrumbs')
    <!-- WISHLIST AREA START -->
    <div class="ltn__checkout-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__checkout-inner">
                        <div class="ltn__checkout-single-content mt-50">
                            <h4 class="title-2">Billing Details</h4>
                            <div class="ltn__checkout-single-content-info">
                                <form action="#">
                                    <h6>Personal Information</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" value="{{ $customer->name }}" name="ltn__name"
                                                    placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="email" name="ltn__email" value="{{ $customer->email }}"
                                                    placeholder="email address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-phone ltn__custom-icon">
                                                <input type="text" value="{{ $customer->telp }}" name="ltn__phone"
                                                    placeholder="phone number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="ltn__company"
                                                    placeholder="Company name (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="ltn__phone"
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
                                                        <input type="text" value="{{ $customer->address }}"
                                                            placeholder="House number and street name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <h6>Town / City</h6>
                                            <div class="input-item">
                                                <input type="text" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <h6>State </h6>
                                            <div class="input-item">
                                                <input type="text" placeholder="State">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <h6>Zip</h6>
                                            <div class="input-item">
                                                <input type="text" placeholder="Zip">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <h6>Order Detail</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="start_date">Start Order</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="start_date">Start Order</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <h6>Order Notes (optional)</h6>
                                    <div class="input-item input-item-textarea ltn__custom-icon">
                                        <textarea name="ltn__message" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>

                                </form>
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
                                    aria-expanded="true">
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
                                    data-bs-target="#faq-item-2-3" aria-expanded="false">
                                    PayPal <img src="{{ asset('assets/frontend/img/icons/payment-3.png') }}" alt="#">
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
                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place order</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping-cart-total mt-50">
                        <h4 class="title-2">Cart Totals</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Brake Conversion Kit <strong>× 2</strong></td>
                                    <td>$298.00</td>
                                </tr>
                                <tr>
                                    <td><strong>Order Total</strong></td>
                                    <td><strong>$633.00</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->
@endsection
