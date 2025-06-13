@php
    $data = $module->data();
@endphp
@if($data)
<section class="services-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="services-one__left">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <span class="h6 section-title__tagline"><span class="icon-broken-bone"></span>{{$module->getTranslatedAttribute('top')}}
                        </span>
                        <h2 class="h3 section-title__title title-animation">{{$module->getTranslatedAttribute('title')}}</h2>
                    </div>
                    <div class="services-one__text">{!! $module->getTranslatedAttribute('text') !!}</div>
                    @if($module->getTranslatedAttribute('url') && $module->getTranslatedAttribute('button'))
                    <div class="services-one__btn-box">
                        <a href="{{$module->getTranslatedAttribute('url')}}" class="thm-btn">{{$module->getTranslatedAttribute('button')}} <span
                                class="icon-plus"></span>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-xl-8">
                <div class="services-one__right">
                    <ul class="row list-unstyled">
                        @foreach ($data as $item)
                        <li class="col-xl-6 col-lg-6 col-md-6 wow {{$loop->index%2 == 0 ? 'fadeInLeft' : 'fadeInRight'}} fadeInLeft" data-wow-delay="{{($loop->index+1)*100}}ms">
                            <div class="services-one__single {{$loop->first ? 'services-one__single-1' : ''}}">
                                <div class="services-one__icon">
                                    <img class="inject-me" src="{{Voyager::image($item->getTranslatedAttribute('image'))}}" alt="{{$item->getTranslatedAttribute('title')}}">
                                    {{-- <span class="icon-broken-bone"></span> --}}
                                </div>
                                <h3 class="services-one__title">{{$item->getTranslatedAttribute('title')}}</h3>
                                <div class="services-one__text">{!! $item->getTranslatedAttribute('text') !!}</div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@push('styles')
<link rel="stylesheet" href="/assets/css/module-css/service.css" />
@endpush
@endif