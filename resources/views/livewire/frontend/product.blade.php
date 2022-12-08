<div>
    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-2 mb-100">
                    <div class="ltn__shop-options">
                        <ul>
                            <li>
                                <div class="showing-product-number text-right">
                                    <span>Showing 9 of 20 results {{ $search }}</span>
                                </div>
                            </li>
                            <li>
                                <div class="short-by text-center">
                                    <select class="nice-select">
                                        <option>Default sorting</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by new arrivals</option>
                                        <option>Sort by price: low to high</option>
                                        <option>Sort by price: high to low</option>
                                    </select>
                                </div>
                                <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i
                                                class="icon-grid"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_product_list"><i class="icon-menu"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    @if (count($query) > 0)
                                        @foreach ($query as $row)
                                            <div class="col-xl-4 col-sm-6 col-12">
                                                <div class="ltn__product-item text-center">
                                                    <div class="product-img">
                                                        <a href="product-details.html"><img
                                                                src="{{ $row->car->picture }}" alt="#"></a>
                                                        <div class="product-badge">
                                                            <ul>
                                                                <li class="badge-1">{{ $row->car->brand->name }}</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-hover-action product-hover-action-2">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick_view_modal">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="add-to-cart">
                                                                    <a href="#" title="Add to Cart"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#add_to_cart_modal"
                                                                        data-picture="{{ $row->car->picture }}"
                                                                        data-name="{{ $row->car->name }}"
                                                                        data-price="{{ number_format($row->price, 2, ',', '.') }}">
                                                                        <span class="cart-text d-none d-xl-block">Add to
                                                                            Cart</span>
                                                                        <span class="d-block d-xl-none"><i
                                                                                class="icon-handbag"></i></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick_view_modal">
                                                                        <i class="icon-shuffle"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h2 class="product-title"><a
                                                                href="product-details.html">{{ $row->car->name }}</a>
                                                        </h2>
                                                        <div class="product-price">
                                                            <span>Rp.
                                                                {{ number_format($row->price, 2, ',', '.') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <span>No data to show</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_product_list">
                            <div class="ltn__product-tab-content-inner ltn__product-list-view">
                                <div class="row">
                                    @if (count($query) > 0)
                                        @foreach ($query as $row)
                                            <div class="col-lg-12">
                                                <div class="ltn__product-item">
                                                    <div class="product-img">
                                                        <a href="product-details.html"><img
                                                                src="{{ $row->car->picture }}" alt="#"></a>
                                                        <div class="product-badge">
                                                            <ul>
                                                                <li class="badge-1">{{ $row->car->brand->name }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h2 class="product-title"><a
                                                                href="product-details.html">{{ $row->car->name }}</a>
                                                        </h2>
                                                        <div class="product-price">
                                                            <span>Rp.
                                                                {{ number_format($row->price, 2, ',', '.') }}</span>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-brief">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Recusandae
                                                                asperiores sit odit nesciunt, aliquid, deleniti non et
                                                                ut
                                                                dolorem!
                                                            </p>
                                                        </div>
                                                        <div class="product-hover-action product-hover-action-2">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick_view_modal">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="add-to-cart">
                                                                    <a href="#" title="Add to Cart"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#add_to_cart_modal"
                                                                        data-picture="{{ $row->car->picture }}"
                                                                        data-name="{{ $row->car->name }}"
                                                                        data-price="{{ number_format($row->price, 2, ',', '.') }}">
                                                                        <span class="cart-text d-none d-xl-block">Add to
                                                                            Cart</span>
                                                                        <span class="d-block d-xl-none"><i
                                                                                class="icon-handbag"></i></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick_view_modal">
                                                                        <i class="icon-shuffle"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <span>No data to show</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__pagination-area text-center">
                        <div class="ltn__pagination ltn__pagination-2">
                            <ul>
                                {!! $query->links() !!}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  mb-100">
                    <aside class="sidebar ltn__shop-sidebar">
                        <!-- Search Widget -->
                        <div class="widget ltn__search-widget">
                            <form action="{{ route('product') }}">
                                <input wire:model="search" name="search" type="text"
                                    value="{{ request('search') }}" placeholder="Search your keyword...">
                                <button type="submit"><i class="icon-magnifier"></i></button>
                            </form>
                        </div>
                        <!-- Price Filter Widget -->
                        <div class="widget ltn__price-filter-widget">
                            <h4 class="ltn__widget-title">Price</h4>
                            <div class="price_filter">
                                <div class="price_slider_amount">
                                    <input type="submit" value="Your range:" />
                                    <input type="text" class="amount" name="price"
                                        placeholder="Add Your Price" />
                                </div>
                                <div class="slider-range"></div>
                            </div>
                        </div>
                        <!-- Top Rated Product Widget -->
                        <div class="widget ltn__top-rated-product-widget d-none">
                            <h4 class="ltn__widget-title ltn__widget-title-border---">Top Rated Product</h4>
                            <ul>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="product-details.html"><img src="img/product/1.png"
                                                    alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="product-details.html">Mixel Solid Seat Cover</a></h6>
                                            <div class="product-price">
                                                <span>$49.00</span>
                                                <del>$65.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="product-details.html"><img src="img/product/2.png"
                                                    alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="product-details.html">Brake Conversion Kit</a></h6>
                                            <div class="product-price">
                                                <span>$49.00</span>
                                                <del>$65.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="product-details.html"><img src="img/product/3.png"
                                                    alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="product-details.html">Coil Spring Conversion</a></h6>
                                            <div class="product-price">
                                                <span>$49.00</span>
                                                <del>$65.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget d-none">
                            <a href="shop.html"><img src="#" alt="#"></a>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->
</div>
