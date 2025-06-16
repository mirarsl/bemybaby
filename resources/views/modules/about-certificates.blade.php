@php
$data = $module->data();
@endphp
@if ($data)
<section class="project-carousel-page">
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style2">
            <span class="h6 section-title__tagline">
                {{$module->getTranslatedAttribute('top')}}
            </span>
            <h2 class="h3 section-title__title title-animation">
                {{$module->getTranslatedAttribute('title')}}
            </h2>
        </div>
        <div class="project-carousel-style owl-carousel owl-theme carousel-dot-style" data-count="{{$data->count()}}">
            @foreach ($data as $item)
            <div class="item">
                <div class="project-two__single">
                    <div class="project-two__img-box">
                        <div class="project-two__img">
                            <img src="{{Voyager::image($item->getTranslatedAttribute('file'))}}" alt="{{$item->getTranslatedAttribute('title')}}">
                        </div>
                        <div class="project-two__content-box">
                            <h2 class="project-two__title"><a data-fancybox href="{{Voyager::image($item->getTranslatedAttribute('file'))}}">{{$item->getTranslatedAttribute('title')}}</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/project.css" />
@endpush

@endif