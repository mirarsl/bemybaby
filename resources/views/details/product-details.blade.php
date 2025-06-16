@extends('pages.details')
@section('details')

@if ($Page->gallery)
@php
$gallery = json_decode($Page->gallery);
@endphp
@else
@php
    $gallery = [];
@endphp
@endif

<section class="product-details">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="product-details__left">
                    <div class="product-details__left-inner">
                        <div class="product-details__content-box">
                            <div class="swiper-container" id="shop-details-one__carousel">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="product-details__img">
                                            <img src="{{Voyager::image($Page->image)}}" alt="{{$Page->getTranslatedAttribute('title')}}">
                                        </div>
                                    </div>
                                    @if ($gallery)
                                    @foreach ($gallery as $item)
                                    <div class="swiper-slide">
                                        <div class="product-details__img">
                                            <img src="{{Voyager::image($item->download_link)}}" alt="{{$Page->getTranslatedAttribute('title')}}">
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="product-details__nav">
                                <div class="swiper-button-prev" id="product-details__swiper-button-prev">
                                    <i class="icon-left-arrow"></i>
                                </div>
                                <div class="swiper-button-next" id="product-details__swiper-button-next">
                                    <i class="icon-right-arrow"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-details__thumb-box">
                            <div class="swiper-container" id="shop-details-one__thumb" data-count="{{count($gallery) + 1}}">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-details__thumb-img">
                                            <img src="{{Voyager::image($Page->image)}}" alt="{{$Page->getTranslatedAttribute('title')}}">
                                        </div>
                                    </div>
                                    @if ($gallery)
                                    @foreach ($gallery as $item)
                                    <div class="swiper-slide">
                                        <div class="product-details__thumb-img">
                                            <img src="{{Voyager::image($item->download_link)}}"
                                                alt="">
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-6">
                <div class="product-details__right">
                    <div class="product-details__top mb-2">
                        <h2 class="h3 product-details__title">
                            {{$Page->getTranslatedAttribute('title')}}
                        </h2>
                    </div>
                    <div class="product-details__content">
                        <p class="product-details__content-text1">{{$Page->getTranslatedAttribute('spot')}}</p>
                    </div>
                    @if ($Page->getTranslatedAttribute('store'))
                    <div class="product-details__inner">
                        <div class="product-details__buttons-boxes">
                            <div class="product-details__buttons-2">
                                <a target="_blank" rel="nofollow" href="{{$Page->getTranslatedAttribute('store')}}" class="thm-btn">
                                    Satın Al 
                                    <span class="icon-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-description">
    <div class="container">
        <div class="product-details__description">
            <div class="product-details__main-tab-box tabs-box">
                <ul class="tab-buttons clearfix list-unstyled">
                    <li data-tab="#description" class="tab-btn active-btn"><span>Açıklama</span></li>
                    <li data-tab="#additional-information" class="tab-btn"><span>Teknik Detaylar</span></li>
                </ul>
                <div class="tabs-content">
                    <div class="tab active-tab" id="description">
                        <div class="product-details__tab-content-inner">
                            <div class="product-details__description-content">
                                <div class="product-details__description-text-1">
                                    {!! $Page->getTranslatedAttribute('text') !!}
                                </div>
                                <div class="product-details__social mt-5">
                                    <div class="title">
                                        <div class="h3">Paylaş:</div>
                                    </div>
                                    <div class="product-details__social-link">
                                        <a data-bs-toggle="tooltip" title="X'te Paylaş" href="https://twitter.com/intent/tweet?url={{urlencode(url()->current())}}&text={{urlencode($Page->getTranslatedAttribute('spot'))}}" onclick="window.open(this.href, 'twitter', 'width=600,height=400'); return false;"><span class="fab fa-x-twitter"></span></a>
                                        <a data-bs-toggle="tooltip" title="Facebook'ta Paylaş" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(url()->current())}}" onclick="window.open(this.href, 'facebook', 'width=600,height=400'); return false;"><span class="fab fa-facebook"></span></a>
                                        <a data-bs-toggle="tooltip" title="Linkedin'de Paylaş" href="https://www.linkedin.com/shareArticle?mini=true&url={{urlencode(url()->current())}}&title={{urlencode($Page->getTranslatedAttribute('title'))}}&summary={{urlencode($Page->getTranslatedAttribute('spot'))}}" onclick="window.open(this.href, 'linkedin', 'width=600,height=400'); return false;"><span class="fab fa-linkedin-in"></span></a>
                                        <a data-bs-toggle="tooltip" title="Paylaşım Metnini Kopyala" href="javascript:void(0)" onclick="copyToClipboard('{{$Page->getTranslatedAttribute('spot')}} - {{url()->current()}}')"><i class="fa fa-copy"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab " id="additional-information">
                        <div class="product-details__tab-content-inner">
                            <div class="product-details__additional-information-content">
                                <div class="row">
                                    <div class="@if ($Page->icon) col-xl-7 @else col-xl-12 @endif">
                                        <div class="product-details__additional-information-text-1">
                                            {!! $Page->getTranslatedAttribute('table') !!}
                                        </div>
                                    </div>
                                    @if ($Page->icon)
                                    <div class="col-xl-5">
                                        <img class="img-fluid w-100" src="{{Voyager::image($Page->icon)}}" alt="{{$Page->getTranslatedAttribute('title')}}">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="related-products">
    <div class="container">
        <div class="related-products__title">
            <h2 class="h3">Diğer Ürünler</h2>
        </div>
        <div class="row">
            <div class="related-products__carousel owl-carousel owl-theme owl-dot-style1" data-count="{{count($Other)}}">
                @foreach ($Other as $item)
                <div class="single-product-style1 instyle--2">
                    <div class="single-product-style1__img">
                        @if ($item->getTranslatedAttribute('image2'))
                        <img src="{{Voyager::image($item->getTranslatedAttribute('image2'))}}" alt="{{$item->getTranslatedAttribute('title')}}">
                        @else
                        <img src="{{Voyager::image($item->getTranslatedAttribute('image'))}}" alt="{{$item->getTranslatedAttribute('title')}}">
                        @endif
                        <img src="{{Voyager::image($item->getTranslatedAttribute('image'))}}" alt="{{$item->getTranslatedAttribute('title')}}">
                    </div>
                    <div class="single-product-style1__content">
                        <div class="single-product-style1__content-left">
                            <h3 class="h4">
                                <a href="{{route('product',$item->getTranslatedAttribute('slug'))}}">
                                    {{$item->getTranslatedAttribute('title')}}
                                </a>
                            </h3>
                            <p>{{$item->getTranslatedAttribute('spot')}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
@endsection
@push('links')
<link rel="stylesheet" href="assets/css/module-css/shop.css" />
@endpush
@push('scripts')
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el));

    function copyToClipboard(text) {
        const textarea = document.createElement('textarea');
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        textarea.setSelectionRange(0, 99999);
        document.execCommand('copy');
        document.body.removeChild(textarea);
    }
</script>
@endpush