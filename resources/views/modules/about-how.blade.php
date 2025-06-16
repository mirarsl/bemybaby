@php
$data = $module->data();
@endphp
@if($data)
<section class="feature-one">
    <div class="container">
        <div class="feature-one__inner">
            <div class="section-title text-left sec-title-animation animation-style2">
                <span class="h6 section-title__tagline">{{$module->getTranslatedAttribute('top')}}
            </span>
            <h2 class="h3 section-title__title title-animation">{{$module->getTranslatedAttribute('title')}}</h2>
        </div>
        <ul class="feature-one__feature-list list-unstyled">
            @foreach ($data as $item)
            <li class="wow fadeInLeft" data-wow-delay="{{($loop->index+1)*100}}ms">
                <div class="feature-one__feature-list-left">
                    <div class="feature-one__feature-list-icon">
                        <img class="inject-me" src="{{Voyager::image($item->getTranslatedAttribute('image'))}}" alt="{{$item->getTranslatedAttribute('title')}}">
                    </div>
                    <h2 class="h3 feature-one__feature-list-title">{{$item->getTranslatedAttribute('title')}}</h2>
                </div>
                <div class="feature-one__feature-list-right">
                    <div class="feature-one__feature-list-sub-title">{!! $item->getTranslatedAttribute('text') !!}</div>
                </div>
            </li>
            @endforeach
        </ul>
        @if($module->getTranslatedAttribute('url') && $module->getTranslatedAttribute('button'))
        <div class="text-center my-3">
            <a href="{{$module->getTranslatedAttribute('url')}}" class="thm-btn">{{$module->getTranslatedAttribute('button')}} <span
                class="icon-plus"></span>
            </a>
        </div>
        @endif
    </div>
</div>
</section>
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/feature.css" />
@endpush
@endif