@php
$term = strip_tags(request()->term);

if(isset($term)){
    $data = $module->data(6,$term);
}else{
    $data = $module->data(6);
}
@endphp
<section class="blog-list">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-list__left">
                    @forelse ($data as $item)
                    <div class="blog-list__single">
                        <div class="blog-list__img-box">
                            <div class="blog-list__img">
                                <img src="{{Voyager::image($item->image)}}" alt="{{$item->getTranslatedAttribute('title')}}">
                                <div class="blog-list__date-box">
                                    <div class="blog-list__date-icon">
                                        <span class="icon-calender"></span>
                                    </div>
                                    <div class="blog-list__date-text">
                                        <p>{{$item->created_at->translatedFormat('j F Y')}}</p>
                                    </div>
                                </div>
                                <div class="blog-list__plus">
                                    <a href="{{route('blog',$item->getTranslatedAttribute('slug'))}}"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-list__content">
                            <h2 class="h3 blog-list__title"><a href="{{route('blog',$item->getTranslatedAttribute('slug'))}}">{{$item->getTranslatedAttribute('title')}}</a></h2>
                            <p class="blog-list__text">{{$item->getTranslatedAttribute('spot')}}</p>
                            <div class="blog-list__read-more mt-3">
                                <a href="{{route('blog',$item->getTranslatedAttribute('slug'))}}" class="thm-btn">Devamını Gör <span
                                    class="icon-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <div class="alert alert-warning">
                            <p>Blog yazısı bulunamadı</p>
                        </div>
                    </div>
                    @endforelse
                    {{$data->links('pagination.blog')}}
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar position-sticky">
                    <div class="sidebar__single sidebar__search">
                        <h2 class="product__sidebar-title @if (isset($term) && $term != '') mb-1 @else mb-3 @endif">{{__('search')}}</h2>
                        @if (isset($term) && $term != '')
                        <p class="mb-1">Aranan Kelime: {{$term}}</p>
                        @endif
                        <form action="{{route('page',$Page->getTranslatedAttribute('slug'))}}" method="get" class="sidebar__search-form">
                            @csrf
                            <input type="search" placeholder="{{__('search')}}" name="term" value="{{$term}}">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="sidebar__single sidebar__need-help">
                        <h2 class="sidebar__need-help-title">Bilgi Al</h2>
                        <div class="sidebar__need-help-call">
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <div class="sidebar__need-help-icon">
                                    <span class="icon-call"></span>
                                </div>
                                <a href="tel:{{$sharedContent['Contact']->getTranslatedAttribute('phone1')}}">{{$sharedContent['Contact']->getTranslatedAttribute('phone1')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/blog.css" />
@endpush