<div class="tab-pane fade" id="property" role="tabpanel" aria-labelledby="timeline-tab">
    <div class="row">
        @foreach ($property as $item)
            <div class="col-lg-4">
                <div class="card product product--grid">
                    <div class="h-100">
                        <div class="product-item">
                            <div class="product-item__image">
                                <span class="like-icon">
                                    <button type="button" class="content-center">
                                        <i class="lar la-heart icon"></i>
                                    </button>
                                </span>
                                <a href="#"><img class="card-img-top img-fluid" src="{{ $item->car->picture }}"
                                        alt="digital-chair"></a>
                            </div>
                            <div class="card-body px-20 pb-25 pt-20">
                                <div class="product-item__body text-capitalize">
                                    <a href="product-details.html">
                                        <h6 class="card-title">{{ $item->car->name }}</h6>
                                    </a>
                                    <div class="d-flex align-items-center mb-10 flex-wrap">
                                        <span class="product-desc-price">Rp.
                                            {{ number_format($item->price, 2, ',', '.') }}</span>
                                    </div>
                                </div>
                                <div class="product-item__footer">
                                    <div class="stars-rating">
                                        <p class="stars-rating__review text-capitalize">
                                            {{ 'Fuel ' . $item->car->fuel . ', Seat Capacity ' . $item->car->seat_capacity . ', Color ' . $item->car->color . ', Transmisi ' . $item->car->transmisi . ', Brand ' . $item->car->brand->name . ', Type' . $item->car->type->name }}
                                        </p>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
