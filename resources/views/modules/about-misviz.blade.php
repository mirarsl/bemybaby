<section class="why-choose-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title text-center sec-title-animation animation-style2">
                    <span class="h6 section-title__tagline">
                        {{$module->getTranslatedAttribute('top')}}
                    </span>
                    <h2 class="h3 section-title__title title-animation">
                        {{$module->getTranslatedAttribute('title')}}
                    </h2>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-choose-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="why-choose-one__text-2">
                        <h3 class="mb-2">Misyon</h3>
                        <div>{!! $module->data()->getTranslatedAttribute('mission') !!}</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-choose-one__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="why-choose-one__text-2">
                        <h3 class="mb-2">Vizyon</h3>
                        <div>{!! $module->data()->getTranslatedAttribute('vision') !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/why-choose.css" />
@endpush