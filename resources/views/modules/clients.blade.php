@php
    $data = $module->data();
@endphp
@if ($data->count() > 0)
<section class="brand-two">
    <div class="container">
        <div class="brand-two__inner">
            <div class="brand-two__carousel owl-theme owl-carousel" data-count="{{$data->count()}}">
                @foreach ($data as $item)
                <div class="item">
                    <div class="brand-two__single">
                        <div class="brand-two__img">
                            @if ($item->getTranslatedAttribute('url'))
                            <a target="_blank" rel="nofollow" href="{{$item->getTranslatedAttribute('url')}}">
                                <img src="{{ Voyager::image($item->getTranslatedAttribute('image')) }}" alt="{{$item->getTranslatedAttribute('title')}}">
                            </a>
                            @else
                            <img src="{{ Voyager::image($item->getTranslatedAttribute('image')) }}" alt="{{$item->getTranslatedAttribute('title')}}">
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/brand.css" />
@endpush
@endif