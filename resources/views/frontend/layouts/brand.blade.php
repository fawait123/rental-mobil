 <!-- PRODUCT AREA START -->
 <div class="ltn__product-area ltn__product-gutter  pt-65 pb-40">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="section-title-area text-center">
                     <h1 class="section-title section-title-border">Recomended</h1>
                 </div>
             </div>
         </div>
         <div class="row justify-content-center">
             <!-- ltn__product-item -->
             @foreach ($recomended as $item)
                 <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                     <div class="ltn__product-item text-center">
                         <div class="product-img">
                             <a href="product-details.html"><img src="{{ $item->property->car->picture }}"
                                     alt="#"></a>
                             <div class="product-badge">
                                 <ul>
                                     <li class="badge-2">{{ $item->property->company->name }}</li>
                                 </ul>
                             </div>
                             <div class="product-hover-action product-hover-action-2">
                                 <ul>
                                     <li>
                                         <a href="#" title="Quick View" data-bs-toggle="modal"
                                             data-bs-target="#quick_view_modal"
                                             data-picture="{{ $item->property->car->picture }}"
                                             data-id="{{ $item->property->id }}"
                                             data-name="{{ $item->property->car->name }}"
                                             data-price="{{ number_format($item->property->price, 2, ',', '.') }}"
                                             data-transmisi="{{ $item->property->car->transmisi }}"
                                             data-color="{{ $item->property->car->color }}"
                                             data-fuel="{{ $item->property->car->fuel }}"
                                             data-seat_capacity="{{ $item->property->car->seat_capacity }}">
                                             <i class="icon-magnifier"></i>
                                         </a>
                                     </li>
                                     <li class="add-to-cart">
                                         @if ($item->property->is_available == 0)
                                             <a href="#" style="pointer-events: none">
                                                 <span class="cart-text d-none d-xl-block">In Order</span>
                                                 <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                             </a>
                                         @endif
                                         <a href="#"
                                             style="pointer-events: {{ count($transaction) > 0 ? 'none' : '' }}"
                                             title="Checkout" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal"
                                             data-picture="{{ $item->property->car->picture }}"
                                             data-name="{{ $item->property->car->name }}"
                                             data-id={{ $item->property->id }}
                                             data-price="{{ number_format($item->property->price, 2, ',', '.') }}">
                                             <span class="cart-text d-none d-xl-block">Checkout</span>
                                             <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#" title="Quick View" data-bs-toggle="modal"
                                             data-bs-target="#quick_view_modal"
                                             data-picture="{{ $item->property->car->picture }}"
                                             data-id="{{ $item->property->id }}"
                                             data-name="{{ $item->property->car->name }}"
                                             data-price="{{ number_format($item->property->price, 2, ',', '.') }}"
                                             data-transmisi="{{ $item->property->car->transmisi }}"
                                             data-color="{{ $item->property->car->color }}"
                                             data-fuel="{{ $item->property->car->fuel }}"
                                             data-seat_capacity="{{ $item->property->car->seat_capacity }}">
                                             <i class="icon-shuffle"></i>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="product-info">
                             <h2 class="product-title"><a
                                     href="product-details.html">{{ $item->property->car->name }}</a></h2>
                             <div class="product-price">
                                 <span>Rp. {{ number_format($item->property->price, 2, ',', '.') }}</span>
                                 {{-- <del>$21.00</del> --}}
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 </div>
 <!-- PRODUCT SLIDER AREA END -->
