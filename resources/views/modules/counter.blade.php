@php
$data = $module->data();
@endphp
@if($data->count() > 0)
<section class="counter-three">
    <div class="container">
        <div class="counter-three__inner">
            <ul class="list-unstyled counter-three__list">
                @foreach ($data as $item)
                <li>
                    <div class="counter-three__single" 
                         data-bs-toggle="tooltip" 
                         data-bs-placement="top" 
                         data-bs-html="true"
                         data-bs-custom-class="custom-tooltip"
                         title="{{$item->getTranslatedAttribute('text')}}">
                        <p class="counter-three__text">{{$item->getTranslatedAttribute('pretext')}}</p>
                        <div class="counter-three__count-box">
                            <span class="h3 odometer" data-count="{{$item->count}}">00</span>
                            <span>{{$item->getTranslatedAttribute('addtional')}}</span>
                        </div>
                        <p class="counter-three__text">{{$item->getTranslatedAttribute('title')}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/counter.css" />
<style>
.custom-tooltip {
    --bs-tooltip-bg: var(--bemybaby-black);
    --bs-tooltip-color: var(--bemybaby-white);
}
</style>
@endpush
@push('scripts')
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el));
</script>
@endpush
@endif