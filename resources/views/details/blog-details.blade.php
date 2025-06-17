@extends('pages.details')
@section('details')
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <img src="{{Voyager::image($Page->image)}}" alt="{{$Page->getTranslatedAttribute('title')}}">
                    </div>
                    <div class="blog-details__content">
                        <ul class="blog-details__meta list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-calender"></span>
                                </div>
                                <p>{{$Page->created_at->translatedFormat('j F Y')}}</p>
                            </li>
                        </ul>
                        <h2 class="h3 blog-details__title">{{$Page->getTranslatedAttribute('title')}}</h2>
                        <div class="blog-details__text">
                            {!! $Page->getTranslatedAttribute('text') !!}
                        </div>
                        <div class="blog-details__tag-and-social">
                            @if ($Page->getTranslatedAttribute('meta_tags') != '')
                            <div class="blog-details__tag">
                                <span class="blog-details__tag-title">Etiketler:</span>
                                <div class="blog-details__tag-list">
                                    @php
                                    $tags = explode(',', $Page->getTranslatedAttribute('meta_tags'));
                                    @endphp
                                    @foreach ($tags as $tag)
                                    <a href="{{route('page',['slug' => $Meta->getTranslatedAttribute('slug'),'_token' => csrf_token(), 'term' => $tag])}}">{{$tag}}</a>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            <div class="blog-details__social">
                                <a rel="nofollow" data-bs-toggle="tooltip" title="X'te Paylaş" href="https://twitter.com/intent/tweet?url={{urlencode(url()->current())}}&text={{urlencode($Page->getTranslatedAttribute('spot'))}}" onclick="window.open(this.href, 'twitter', 'width=600,height=400'); return false;"><span class="fab fa-x-twitter"></span></a>
                                <a rel="nofollow" data-bs-toggle="tooltip" title="Facebook'ta Paylaş" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(url()->current())}}" onclick="window.open(this.href, 'facebook', 'width=600,height=400'); return false;"><span class="fab fa-facebook"></span></a>
                                <a rel="nofollow" data-bs-toggle="tooltip" title="Linkedin'de Paylaş" href="https://www.linkedin.com/shareArticle?mini=true&url={{urlencode(url()->current())}}&title={{urlencode($Page->getTranslatedAttribute('title'))}}&summary={{urlencode($Page->getTranslatedAttribute('spot'))}}" onclick="window.open(this.href, 'linkedin', 'width=600,height=400'); return false;"><span class="fab fa-linkedin-in"></span></a>
                                <a rel="nofollow" data-bs-toggle="tooltip" title="Whatsapp'ta Paylaş" href="https://wa.me/?text={{urlencode($Page->getTranslatedAttribute('spot') . ' - ' . url()->current())}}" target="_blank" onclick="window.open(this.href, 'window', 'width=600,height=400'); return false;"><span class="fab fa-whatsapp"></span></a>
                                <a rel="nofollow" data-bs-toggle="tooltip" title="Paylaşım Metnini Kopyala" href="javascript:void(0)" onclick="copyToClipboard('{{$Page->getTranslatedAttribute('spot')}} - {{url()->current()}}')"><i class="fa fa-copy"></i></a>
                            </div>
                        </div>
                        <div class="blog-details__prev-next">
                            <div class="blog-details__prev">
                                @if ($Prev != null)
                                <div class="blog-details__prev-icon">
                                    <a href="{{route('blog',['slug' => $Prev->getTranslatedAttribute('slug')])}}"><span class="icon-prev"></span></a>
                                </div>
                                <div class="content">
                                    <p>Önceki</p>
                                </div>
                                @endif
                            </div>
                            <div class="blog-details__next">
                                @if ($Next != null)
                                <div class="content">
                                    <p>Sonraki</p>
                                </div>
                                <div class="blog-details__next-icon">
                                    <a href="{{route('blog',['slug' => $Next->getTranslatedAttribute('slug')])}}"><span class="icon-prev"></span></a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar position-sticky">
                    <div class="sidebar__single sidebar__search">
                        <form action="{{route('page',$Meta->getTranslatedAttribute('slug'))}}" method="get" class="sidebar__search-form">
                            @csrf
                            <input type="search" placeholder="{{__('search')}}" name="term">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    @if (count($Other) > 0)
                    <div class="sidebar__single sidebar__post-box">
                        <h2 class="sidebar__title h3">Son Gönderiler</h2>
                        <ul class="sidebar__post-list list-unstyled">
                            @foreach ($Other as $item)
                            <li>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <a href="{{route('blog',['slug' => $item->getTranslatedAttribute('slug')])}}">{{$item->getTranslatedAttribute('title')}}</a>
                                    </h3>
                                    <p class="sidebar__post-date"><span class="icon-calender"></span>{{$item->created_at->translatedFormat('j F Y')}}
                                    </p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/blog.css" />
@endpush
@push('scripts')
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el));
    
    function copyToClipboard(text) {
        const textarea = document.createElement('textarea');
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        textarea.setSelectionRange(0, 99999);
        document.execCommand('copy');
        document.body.removeChild(textarea);
    }
</script>
@endpush