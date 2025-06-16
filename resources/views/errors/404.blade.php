@extends('layout.master')
@push('body_class','page-header ')
@section('content')
{!! Breadcrumbs::view('breadcrumbs::json-ld','page') !!}
<section class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="error-page__inner">
                    <div class="error-page__title-box">
                        <h1 class="error-page__title">404</h1>
                    </div>
                    <h2 class="h3 error-page__tagline">{{__('404.title')}}</h2>
                    <p class="error-page__text">{{__('404.description')}}</p>
                    <div class="error-page__btn-box mt-3">
                        <a href="{{route('home')}}" class="thm-btn">{{__('404.button')}}<span
                                class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/error-page.css" />
@endpush