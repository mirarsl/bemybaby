<section class="blog-details">
    <div class="container">
        <div class="blog-details__left">
            <div class="blog-details__text">
                {!! $module->getTranslatedAttribute('text') !!}
            </div>
        </div>
    </div>
</section>
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/blog.css" />
@endpush