<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1, 
        "loop": false,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
            "delay": 8000,
            "disableOnInteraction": false
        },
        "init":false
    }'>
    <div class="swiper-wrapper">
        @foreach ($module->data() as $item)
        <div class="swiper-slide">
            <div class="main-slider__shape-1"></div>
            <div class="main-slider__shape-2"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="main-slider__content">
                            <p class="main-slider__sub-title">{{$item->getTranslatedAttribute('top')}}</p>
                            <h2 class="main-slider__title">{!! $item->getTranslatedAttribute('title') !!}</h2>
                            <p class="main-slider__text">{{ $item->getTranslatedAttribute('text') }}</p>
                            <div class="main-slider__btn-and-video-box">
                                @if ($item->getTranslatedAttribute('button1_title') && $item->getTranslatedAttribute('button1_link'))
                                <div class="main-slider__btn-box">
                                    <a href="{{ $item->getTranslatedAttribute('button1_link') }}" class="thm-btn">{{ $item->getTranslatedAttribute('button1_title') }} <span class="icon-plus"></span> </a>
                                </div>
                                @endif
                                @if ($item->getTranslatedAttribute('video'))
                                <div class="main-slider__video-box">
                                    <div class="main-slider__video-link">
                                        <a href="https://www.youtube.com/watch?v={{ $item->getTranslatedAttribute('video') }}" class="video-popup">
                                            <div class="main-slider__video-icon">
                                                <span class="fa fa-play"></span>
                                                <i class="ripple"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <span class="h4 mb-0 main-slider__video-title">Tanıtımı İzle</span>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="main-slider__img-box">
                            <div class="main-slider__img">
                                <img src="{{ Voyager::image($item->getTranslatedAttribute('image')) }}" alt="{{strip_tags($item->getTranslatedAttribute('title'))}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="swiper-pagination" id="main-slider-pagination"></div>
</section>
@push('styles')
<link rel="stylesheet" href="/assets/css/module-css/slider.css" />
@endpush