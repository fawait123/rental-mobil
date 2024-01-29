@extends('frontend.layouts.app')

@section('content')
    @include('frontend.layouts.breadcrumbs')
    <!-- WISHLIST AREA START -->
    <div class="liton__wishlist-area mb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping-cart-inner">
                        <div class="shoping-cart-table table-responsive">
                            <table class="table">
                                <tbody>
                                    @if (count($wishlist) > 0)
                                        @foreach ($wishlist as $item)
                                            <tr>
                                                <td class="cart-product-remove"><a
                                                        href="{{ route('wishlist.destroy', $item->id) }}">x</a></td>
                                                <td class="cart-product-image">
                                                    <a href="{{ route('product.detail', $item->property->id) }}"><img
                                                            src="{{ $item->property->car->picture }}" alt="#"></a>
                                                </td>
                                                <td class="cart-product-info">
                                                    <h4><a href="{{ route('product.detail', $item->property->id ?? 0) }}">{{ $item->property->car->name }}
                                                    </h4>
                                                </td>
                                                <td class="cart-product-price">
                                                    Rp. {{ number_format($item->property->price, 2, ',', '.') }}</td>
                                                <td class="cart-product-stock">
                                                    {{ $item->property->is_available == 1 ? 'Ready' : 'In Order' }}</td>
                                                @if ($item->property->is_available == 0)
                                                    <a href="#" style="pointer-events: none">
                                                        <span class="cart-text d-none d-xl-block">In Order</span>
                                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                                    </a>
                                                @else
                                                    <td class="cart-product-add-cart">
                                                        <a class="submit-button-1" href="#" title="Add to Cart"
                                                            data-bs-toggle="modal" data-bs-target="#add_to_cart_modal"
                                                            style="pointer-events: {{ count($transaction) > 0 ? 'none' : '' }}"
                                                            data-picture="{{ $item->property->car->picture }}"
                                                            data-name="{{ $item->property->car->name }}"
                                                            data-id={{ $item->property->id }}
                                                            data-price="{{ number_format($item->property->price, 2, ',', '.') }}">Order
                                                            Now</a>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    @else
                                        <h1 class="text-center">You don't have Wishlist</h1>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->
@endsection
