<div class="ltn__slider-area ltn__slider-3 ltn__slider-6 section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1 arrow-white---">
        @foreach ($banner as $item)
            <!-- ltn__slide-item  -->
            <div class="ltn__slide-item ltn__slide-item-8 text-color-white---- bg-image bg-overlay-theme-black-80---"
                data-bs-bg="{{ $item->property->car->picture }}">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-item-info">
                                            <div class="slide-item-info-inner ltn__slide-animation">
                                                <h1 class="slide-title animated text-white">
                                                    {{ $item->property->company->name }}
                                                </h1>
                                                <h6 class="slide-sub-title ltn__body-color slide-title-line animated text-white"
                                                    style="color: white !important">{{ $item->property->car->name }}
                                                </h6>
                                                <div class="slide-brief animated text-white">
                                                    <p class="text-white text-bold" style="font-size: 24px">Rp.
                                                        {{ number_format($item->property->price, 2, ',', '.') }}</p>
                                                </div>
                                                <div class="btn-wrapper animated">
                                                    <a href="service.html" class="theme-btn-1 btn btn-round">Order
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
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
