<section class="about-one about-six">
    <div class="container">
        <div class="about-one__inner">
            <div class="about-one__img-box">
                <div class="about-one__content-box wow slideInLeft" data-wow-delay="100ms"
                    data-wow-duration="2500ms">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <span class="h6 section-title__tagline">{{$Page->data()->first()->getTranslatedAttribute('history')}}
                        </span>
                        <h2 class="h3 section-title__title title-animation">{{$Page->data()->first()->getTranslatedAttribute('title')}}
                        </h2>
                    </div>
                    <div class="about-one__text">{!! $Page->data()->first()->getTranslatedAttribute('about') !!}</div>
                </div>
                <div class="about-one__img">
                    <img src="{{Voyager::image($Page->data()->first()->image1)}}" alt="{{$Page->data()->first()->getTranslatedAttribute('title')}}">
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<link rel="stylesheet" href="assets/css/module-css/about.css" />
@endpush
