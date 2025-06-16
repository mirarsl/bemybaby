@php
$term = strip_tags(request()->term);

// if(isset($term) && ($term == '' || $term == null)){
//     return redirect()->route('page', $Page->getTranslatedAttribute('slug'));
// }

if(isset($term)){
    $data = $module->data(12,$term);
}else{
    $data = $module->data(12);
}
@endphp
<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-12">
                <div class="product__items">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="product__showing-result">
                                <div class="product__showing-text-box">
                                    <p class="product__showing-text">Toplam {{$module->data()->count()}} adet üründen {{$data->count()}} tane gösteriliyor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product__all">
                        <div class="product__all-tab">
                            <div class="tabs-content-box">
                                <div class="tab-content-box-item tab-content-box-item-active" id="grid">
                                    <div class="product__all-tab-content-box-item">
                                        <div class="product__all-tab-single">
                                            <div class="row">
                                                @forelse ($data as $item)
                                                <div class="col-xl-4 col-lg-6 col-md-6">
                                                    <div class="single-product-style1">
                                                        <div class="single-product-style1__img">
                                                            @if ($item->getTranslatedAttribute('image2'))
                                                            <img src="{{Voyager::image($item->getTranslatedAttribute('image2'))}}"
                                                            alt="{{$item->getTranslatedAttribute('title')}}">
                                                            @else
                                                            <img src="{{Voyager::image($item->getTranslatedAttribute('image'))}}" alt="{{$item->getTranslatedAttribute('title')}}">
                                                            @endif
                                                            <img src="{{Voyager::image($item->getTranslatedAttribute('image'))}}" alt="{{$item->getTranslatedAttribute('title')}}">
                                                        </div>
                                                        <div class="single-product-style1__content">
                                                            <div class="single-product-style1__content-left">
                                                                <h2 class="h4">
                                                                    <a href="{{route('product',$item->getTranslatedAttribute('slug'))}}">
                                                                        {{$item->getTranslatedAttribute('title')}}
                                                                    </a>
                                                                </h2>
                                                                <p>{{$item->getTranslatedAttribute('spot')}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                <div class="col-xl-12">
                                                    <div class="alert alert-info">
                                                        Ürün bulunamadı
                                                    </div>
                                                </div>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ $data->links('pagination.index') }}
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-12">
                <div class="product__sidebar">
                    <div class="shop-search product__sidebar-single">
                        <h2 class="product__sidebar-title @if (isset($term) && $term != '') mb-1 @else mb-3 @endif">{{__('search')}}</h2>
                        @if (isset($term) && $term != '')
                            <p class="mb-1">Aranan Kelime: {{$term}}</p>
                        @endif
                        <form action="{{route('page',$Page->getTranslatedAttribute('slug'))}}" method="get">
                            @csrf
                            <input type="text" placeholder="{{__('search')}}" name="term" value="{{$term}}">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/shop.css" />
@endpush