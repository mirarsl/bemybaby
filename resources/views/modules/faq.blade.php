@if ($module->data()->count() > 0)
<section class="faq-three">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="faq-three__left">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <span class="h6 section-title__tagline">{{$module->getTranslatedAttribute('top')}}
                        </span>
                        <h2 class="h3 section-title__title title-animation">{{$module->getTranslatedAttribute('title')}}</h2>
                    </div>
                    <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                        @foreach ($module->data() as $item)
                        <div class="accrodion {{$loop->first ? 'active' : ''}} wow fadeInLeft" data-wow-delay="{{($loop->index+1)*100}}ms">
                            <div class="accrodion-title">
                                <div class="faq-three-accrodion__count"></div>
                                <h3 class="h4">{{$item->getTranslatedAttribute('title')}}</h3>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>{{ $item->getTranslatedAttribute('text') }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="faq-three__right position-sticky wow fadeInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="faq-three__img">
                        <img src="{{ Voyager::image($module->getTranslatedAttribute('image')) }}" alt="{{$module->getTranslatedAttribute('title')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('styles')
<link rel="stylesheet" href="/assets/css/module-css/faq.css" />
@endpush
@endif