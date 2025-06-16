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
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>About Us</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span class="icon-arrow-left"></span></li>
                    <li>About Us</li>
                </ul>
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
