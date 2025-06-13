<section class="why-choose-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                @if ($module->getTranslatedAttribute('image'))
                <div class="why-choose-one__right wow fadeInLeft position-sticky" data-wow-delay="100ms"
                data-wow-duration="2500ms">
                <div class="why-choose-one__img">
                    <img src="{{ Voyager::image($module->getTranslatedAttribute('image')) }}" alt="{{$module->getTranslatedAttribute('top')}}">
                </div>
            </div>
            @endif
        </div>
        <div class="col-xl-6">
            <div class="why-choose-one__left">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <span class="h6 section-title__tagline">{{$module->getTranslatedAttribute('top')}}</span>
                    <h2 class="h3 section-title__title title-animation">{{$module->getTranslatedAttribute('title')}}</h2>
                </div>
                <div class="why-choose-one__text-1">
                    {!! $module->getTranslatedAttribute('text') !!}
                </div>
                @if ($module->data()->count() > 0)
                <ul class="list-unstyled why-choose-three__point mt-4">
                    @foreach ($module->data() as $item)
                    <li>
                        <div class="why-choose-three__point-icon">
                            <span><img class="inject-me" src="{{ Voyager::image($item->getTranslatedAttribute('icon')) }}" alt="{{$item->getTranslatedAttribute('title')}}"></span>
                        </div>
                        <div class="why-choose-three__point-content">
                            <h3 class="h4 why-choose-three__point-title">{{$item->getTranslatedAttribute('title')}}</h3>
                            <p class="why-choose-three__point-text">{!! $item->getTranslatedAttribute('text') !!}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>
</section>
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/why-choose.css" />
@endpush