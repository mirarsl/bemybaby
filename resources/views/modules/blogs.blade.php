@php
$blogs = $module->data();
@endphp
@if ($blogs->count() > 0)
<section class="blog-two">
    <div class="container">
        <div class="blog-two__top">
            <div class="section-title-two text-left sec-title-animation animation-style1">
                <span class="h6 section-title-two__tagline">{{$module->getTranslatedAttribute('top')}}</span>
                <h2 class="section-title-two__title title-animation">{{$module->getTranslatedAttribute('title')}}</h2>
            </div>
            <div class="blog-two__btn-box">
                <a href="{{route('page',['slug'=>'blog'])}}" class="thm-btn">Tüm Yazılar <span class="icon-plus"></span></a>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $item)
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                <div class="blog-two__single">
                    <div class="blog-two__img-box">
                        <div class="blog-two__img">
                            <img src="{{Voyager::image($item->image)}}" alt="{{$item->getTranslatedAttribute('title')}}">
                        </div>
                        <div class="blog-two__date-box">
                            <div class="blog-two__date-icon">
                                <span class="icon-calender"></span>
                            </div>
                            <div class="blog-two__date-text">
                                <p>{{$item->created_at->translatedFormat('j F Y')}}</p>
                            </div>
                        </div>
                        <div class="blog-two__plus">
                            <a href="{{route('blog',$item->getTranslatedAttribute('slug'))}}"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="blog-two__content">
                        <h3 class="blog-two__title">
                            <a href="{{route('blog',$item->getTranslatedAttribute('slug'))}}">{{$item->getTranslatedAttribute('title')}}</a>
                        </h3>
                        <ul class="blog-two__meta list-unstyled">
                            <li>
                                <p>{{$item->getTranslatedAttribute('spot')}}</p>
                            </li>
                        </ul>
                        <div class="blog-two__read-more">
                            <a href="{{route('blog',$item->getTranslatedAttribute('slug'))}}">Devamını Gör <span class="icon-plus"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/blog.css" />
@endpush
@endif