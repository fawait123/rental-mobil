@extends('frontend.layouts.app')

@section('content')
    @include('frontend.layouts.breadcrumbs')

    <!-- CONTACT MESSAGE AREA START -->
    <div class="ltn__contact-message-area mt-100 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow--- white-bg---">
                        <h3 class="text-center mb-50">Need Our Help! Please Send an Email.</h3>
                        <form id="contact-form" action="{{ route('frontend.payment') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" value="{{ $payment->payment->transaction->name }}" name="phone"
                                        placeholder="Phone Number:">
                                    <input type="text" name="name"
                                        value="{{ $payment->payment->transaction->property->car->name }}"
                                        placeholder="Name:" readonly>
                                    <input type="email" value="Rp. {{ number_format($payment->nominal, 2, ',', '.') }}"
                                        name="email" placeholder="Email:" readonly>
                                    <input type="text" value="{{ $payment->payment->transaction->number_of_days }} days"
                                        name="subject" placeholder="Your Title:" readonly>
                                    <input type="text" value="Payment to {{ $payment->step }}" name="subject"
                                        placeholder="Your Title:" readonly>
                                </div>
                                <div class="col-md-7">
                                    <div class="ltn__checkout-payment-method mt-50">
                                        <h4 class="title-2">Payment Method</h4>
                                        <div id="checkout_accordion_1">
                                            <!-- card -->
                                            <div class="card">
                                                <h5 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                                    data-bs-target="#pay-bca" aria-expanded="false"
                                                    onclick="document.getElementById('payment').value = 'bca'">
                                                    BCA <img src="{{ asset('assets/frontend/logo/bca.jpg') }}"
                                                        alt="#">
                                                </h5>
                                                <div id="pay-bca" class="collapse" data-bs-parent="#checkout_accordion_1">
                                                    <div class="card-body">
                                                        <p>Pay via BCA;.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <h5 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                                    data-bs-target="#pay-mandiri" aria-expanded="false"
                                                    onclick="document.getElementById('payment').value = 'bni'">
                                                    BNI <img src="{{ asset('assets/frontend/logo/bni.jpg') }}"
                                                        alt="#">
                                                </h5>
                                                <div id="pay-mandiri" class="collapse"
                                                    data-bs-parent="#checkout_accordion_1">
                                                    <div class="card-body">
                                                        <p>Pay via BNI;.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <h5 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                                    data-bs-target="#pay-bri" aria-expanded="false"
                                                    onclick="document.getElementById('payment').value = 'bri'">
                                                    BRI <img src="{{ asset('assets/frontend/logo/bri.png') }}"
                                                        alt="#">
                                                </h5>
                                                <div id="pay-bri" class="collapse" data-bs-parent="#checkout_accordion_1">
                                                    <div class="card-body">
                                                        <p>Pay via BRI;.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ltn__payment-note mt-30 mb-30">
                                            <p>Your personal data will be used to process your order, support your
                                                experience throughout
                                                this website, and for other purposes described in our privacy policy.</p>
                                        </div>
                                        <input type="text" name="payment" id="payment"
                                            class="form-control @error('payment') is-invalid @enderror" readonly
                                            value="">
                                        <input type="hidden" name="id" value="{{ $payment->id }}">
                                        @error('payment')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place
                                            order</button>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12">
                                    <div class="btn-wrapper mt-0">
                                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Send
                                            Message</button>
                                    </div>
                                    <p class="form-messege mb-0 mt-20"></p>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->
@endsection
