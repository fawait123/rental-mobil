@extends('frontend.layouts.app')

@section('content')
    @include('frontend.layouts.breadcrumbs')

    <!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <i class="icon-location-pin"></i>
                        </div>
                        <h3>Email Address</h3>
                        <p>info@webmail.com <br>
                            jobs@webexample.com</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <i class="icon-phone"></i>
                        </div>
                        <h3>Phone Number</h3>
                        <p>+1234-567 890 <br>
                            +09876-543 210</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <i class="icon-envelope"></i>
                        </div>
                        <h3>Email & Web</h3>
                        <p>info@webmail.com <br>
                            jobs@webexample.com</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <i class="icon-speedometer"></i>
                        </div>
                        <h3>Opening Hours</h3>
                        <p>Fri to Wed: 6:00 Am to 8:00 Pm <br>
                            Thursday - Off</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT ADDRESS AREA END -->

    <!-- CONTACT MESSAGE AREA START -->
    <div class="ltn__contact-message-area mt-100 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow--- white-bg---">
                        <h3 class="text-center mb-50">Need Our Help! Please Send an Email.</h3>
                        <form id="contact-form" action="mail.php" method="post">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="name" placeholder="Name:">
                                    <input type="email" name="email" placeholder="Email:">
                                    <input type="text" name="phone" placeholder="Phone Number:">
                                    <input type="text" name="subject" placeholder="Your Title:">
                                </div>
                                <div class="col-md-7">
                                    <textarea name="message" placeholder="Enter message"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <div class="btn-wrapper mt-0">
                                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Send
                                            Message</button>
                                    </div>
                                    <p class="form-messege mb-0 mt-20"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->
@endsection
