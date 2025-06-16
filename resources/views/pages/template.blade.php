@extends('layout.master')
@section('content')
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{Voyager::image($Page->image)}});">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h1 class="h3">{{$Page->getTranslatedAttribute('title')}}</h1>
            @if($Page->getTranslatedAttribute('hero'))
            <p>{{$Page->getTranslatedAttribute('hero')}}</p>
            @endif
            <div class="thm-breadcrumb__inner mt-2">
                {!! Breadcrumbs::view('breadcrumbs.index','page') !!}
                {!! Breadcrumbs::view('breadcrumbs::json-ld','page') !!}
            </div>
        </div>
    </div>
</section>

@if (!(empty($Page->data())))
    @if (View::exists('modules.' . $Page->list_name))
        @include('modules.' . $Page->list_name, ['module' => $Page])
    @endif
@elseif($Page->list_name)
    @if (View::exists('modules.' . $Page->list_name))
        @include('modules.' . $Page->list_name, ['module' => $Page])
    @endif
@else
    @include('modules.details', ['module' => $Page])
@endif
@hasSection ('modules')
    @yield('modules')
@else
    @isset($Page->modules)
        @forelse ($Page->modules as $module)
            @if (View::exists('modules.' . $module->slug))
                @include('modules.' . $module->slug, ['module' => $module])
            @endif
        @empty
        @endforelse
    @endisset
@endif
@push('page_codes')
{!! $Page->page_codes !!}
@endpush
@endsection
@section('language')
<li>
    <a href=""><i class="lni lni-language"></i> {{LaravelLocalization::getCurrentLocaleNative()}}</a>
    <ul>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getURLFromRouteNameTranslated($localeCode, 'routes.page', ['slug' => $Page->fullSlug($localeCode)]) }}">
                {{ $properties['native'] }}
            </a>
        </li>
        @endforeach
    </ul>
</li>
@endsection
@push('links')
<link rel="stylesheet" href="/assets/css/module-css/page-header.css" />
@endpush
