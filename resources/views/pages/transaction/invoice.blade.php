@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="payment-invoice global-shadow border bg-white radius-xl w-100 mb-30">
                <div class="payment-invoice__body">
                    <div class="payment-invoice-address d-flex justify-content-sm-between">
                        <div class="payment-invoice-logo">
                            <a href="index.html"><img class="svg dark" src="img/logo_dark.svg" alt=""></a>
                        </div>
                        <div class="payment-invoice-address__area">
                            <address>{{ $company->name }}<br> {{ $company->address }}<br> {{ $company->email }}<br>
                                Phone : {{ $company->telp }}</address>
                        </div>
                    </div><!-- End: .payment-invoice-address -->
                    <div class="payment-invoice-qr d-flex justify-content-between mb-40 px-xl-50 px-30 py-sm-30 py-20 ">
                        <div class="d-flex justify-content-center mb-lg-0 mb-25">
                            <div class="payment-invoice-qr__number">
                                <div class="display-3">
                                    Invoice
                                </div>
                                <p>No : <span>#{{ $transaction->invoice }}</span></p>
                                <p>Start Order : <span>{{ date('d M Y', strtotime($transaction->start_order)) }}</span></p>
                                <p>End Order : <span>{{ date('d M Y', strtotime($transaction->end_order)) }}</span></p>
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
                                                    <h5 class="mt-0">{{ $transaction->property->car->name }}</h5>
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
                                        <td class="unit text-right">{{ number_format($transaction->price, 2, ',', '.') }}
                                        </td>
                                        <td class="invoice-quantity text-right">{{ $transaction->number_of_days }}</td>
                                        <td class="text-right order">
                                            {{ number_format($transaction->total_price, 2, ',', '.') }}</td>
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
                                                <p>Rp. {{ number_format($transaction->total_price, 2, ',', '.') }}</p>
                                                <h5 class="text-primary">
                                                    Rp. {{ number_format($transaction->total_price, 2, ',', '.') }}</h5>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-invoice__btn mt-lg-50 pt-lg-30 mt-30 pt-20">
                            <button type="button"
                                onclick="event.preventDefault(); document.getElementById('form-pay').submit()"
                                class="btn border rounded-pill bg-normal text-gray px-25">
                                <span data-feather="dollar-sign"></span>Pay Now</button>
                            <button type="button" class="btn border rounded-pill bg-normal text-gray px-25">
                                <span data-feather="send"></span>invoice</button>
                            <button type="button"
                                onclick="event.preventDefault(); document.getElementById('form-transaction').submit()"
                                class="btn border rounded-pill bg-normal text-gray px-25">
                                <span data-feather="check-circle"></span>Transaction Completed ?</button>
                            <button type="button" class="btn-primary btn rounded-pill px-25 text-white download"
                                onclick="window.location.href='{{ route('transaction.download', $transaction->id) }}'">
                                <span data-feather="upload"></span>download</button>
                        </div>
                    </div><!-- End: .payment-invoice-table -->
                </div><!-- End: .payment-invoice__body -->
            </div><!-- End: .payment-invoice -->
        </div><!-- End: .col -->
    </div>
    <form action="{{ route('transaction.update', $transaction->id) }}" method="POST" id="form-pay">
        @csrf
        @method('put')
        <input type="hidden" name="type" value="pay">
    </form>

    <form action="{{ route('transaction.update', $transaction->id) }}" method="POST" id="form-transaction">
        @csrf
        @method('put')
        <input type="hidden" name="type" value="transaction">
    </form>
@endsection
