@extends('layout.master')
@section('modules')
    @if (isset($View) && View::exists('modules.' . $View))
        @include('modules.' . $View, ['module' => $Page])
    @endif
    @isset($Meta->modules)
        @forelse ($Meta->modules as $module)
            @if (View::exists('modules.' . $module->slug))
                @include('modules.' . $module->slug, ['module' => $module])
            @endif
        @empty
        @endforelse
    @endisset
@endsection
@section('content')
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{Voyager::image($Page->banner ?? $Meta->image)}});">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h1 class="h3">{{$Page->getTranslatedAttribute('title')}}</h1>
            @if($Page->getTranslatedAttribute('hero'))
            <p>{{$Page->getTranslatedAttribute('hero')}}</p>
            @elseif($Page->getTranslatedAttribute('spot'))
            <p>{{$Page->getTranslatedAttribute('spot')}}</p>
            @endif
            <div class="thm-breadcrumb__inner mt-2">
                {!! Breadcrumbs::view('breadcrumbs.index','page') !!}
                {!! Breadcrumbs::view('breadcrumbs::json-ld','page') !!}
            </div>
        </div>
    </div>
</section>
@yield('details')
@yield('modules')
@endsection
@push('links')
<link rel="stylesheet" href="/assets/css/module-css/page-header.css" />
@endpush
