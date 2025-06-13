@if($module->data()->count() > 0)
@php
$data = $module->data();
@endphp
<section class="testimonial-five">
    <div class="container">
        <div class="section-title-three text-center sec-title-animation animation-style2">
            <span class="h6 section-title-three__tagline">{{$module->getTranslatedAttribute('top')}}</span>
            <h2 class="h3 section-title-three__title title-animation">{{$module->getTranslatedAttribute('title')}}
            </h2>
        </div>
        <div class="testimonial-five__carousel owl-theme owl-carousel" data-count="{{$data->count()}}">
            @foreach($data as $item)
            <div class="item">
                <div class="testimonial-five__single {{$item->firm ? 'testimonial-five__single--firm' : ''}}">
                    <div class="testimonial-five__quote">
                        <span class="icon-quote-2"></span>
                    </div>
                    <p class="testimonial-five__text">{{$item->getTranslatedAttribute('text')}}</p>
                    <div class="testimonial-five__client-info-and-ratting-box">
                        <div class="testimonial-five__Client-box">
                            <div class="h3">{{$item->getTranslatedAttribute('name')}}</div>
                            @if($item->getTranslatedAttribute('title') || $item->getTranslatedAttribute('firm'))
                            <p>{!! ($item->getTranslatedAttribute('firm') ? "<strong>".$item->getTranslatedAttribute('firm')."</strong>" : '').($item->getTranslatedAttribute('firm') && $item->getTranslatedAttribute('title') ? " - " : '').($item->getTranslatedAttribute('title') ?   $item->getTranslatedAttribute('title') : '') !!}</p>
                            @endif
                        </div>
                        <div class="testimonial-five__ratting">
                            @for($i=0; $i < $item->stars; $i++)
                            <span class="icon-star active"></span>
                            @endfor
                            @for($i=0; $i < 5 - $item->stars; $i++)
                            <span class="icon-star"></span>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/testimonial.css" />
@endpush
@endif