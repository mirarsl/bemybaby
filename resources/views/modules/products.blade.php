@if ($module->data()->count() > 0)
<section class="project-one">
    <div class="container">
        <div class="project-four__top">
            <div class="section-title-three text-left sec-title-animation animation-style1">
                <span class="h6 section-title-three__tagline">{{$module->getTranslatedAttribute('top')}}</span>
                <h2 class="h3 section-title-three__title title-animation">{{$module->getTranslatedAttribute('title')}}
                </h2>
            </div>
            <div class="project-one__text">
                {!! $module->getTranslatedAttribute('text') !!}
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($module->data() as $item)
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="project-four__single">
                    <div class="project-four__img-box">
                        <div class="project-four__img">
                            <img src="{{ Voyager::image($item->getTranslatedAttribute('image')) }}" alt="{{$item->getTranslatedAttribute('title')}}">
                        </div>
                    </div>
                    <div class="project-four__content">
                        <div class="project-four__title-box">
                            <h3 class="project-four__title"><a href="{{route('product',$item->getTranslatedAttribute('slug'))}}">{{$item->getTranslatedAttribute('title')}}</a></h3>
                            <p class="project-four__sub-title">{{$item->getTranslatedAttribute('spot')}}</p>
                        </div>
                        <div class="project-four__arrow">
                            <a href="{{route('product',$item->getTranslatedAttribute('slug'))}}"><span class="icon-up-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @if ($module->getTranslatedAttribute('button') != '')
        <div class="project-four__btn-box">
            <a href="{{$module->getTranslatedAttribute('url')}}" class="thm-btn">{{$module->getTranslatedAttribute('button')}}<span class="icon-arrow-right"></span> </a>
        </div>
        @endif
    </div>
</section>
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/project.css" />
@endpush
@endif