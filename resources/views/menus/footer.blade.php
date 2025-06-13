@foreach($items as $menu_item)
<div class="col-xl col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
    <div class="footer-widget__services">
        <h2 class="footer-widget__title">{{$menu_item->getTranslatedAttribute('title')}}</h2>
        @if (count($menu_item->children) > 0 || isset($menu_item->app_model))
        @if (count($menu_item->children) > 0)	
        <ul class="footer-widget__services-link-list list-unstyled">
            @foreach ($menu_item->children as $item)
            <li><a href='{{ !isset($item->app_model) ?  (isset($item->route) ? $item->link() : (isset($item->parameters) ? $item->parameters->{app()->getLocale()} : 'javascript:void(0);') ) : (isset($item->parameters) ? route('page',$item->parameters->slug) : 'javascript:void(0);') }}'> {{$item->getTranslatedAttribute('title')}}</a></li>
            @endforeach
        </ul>
        @else
        <ul class="footer-widget__services-link-list list-unstyled">
            @php
            $model = app($menu_item->app_model);
            if(isset($menu_item->model_scopes) && is_string($menu_item->model_scopes)){
                foreach (json_decode($menu_item->model_scopes) as $key => $value) {
                    $model = $model->$value();
                }
            }
            if(isset($menu_item->model_limit)){
                $model->limit($menu_item->model_limit,0);
            }
            @endphp
            @foreach ($model->get() as $item)
            <li><h3 class="footer-widget__services-link"><a href="{{route($menu_item->route,$item->getTranslatedAttribute('slug'))}}" target="{{$menu_item->target}}"> {{$item->getTranslatedAttribute('title')}}</a></h3></li>
            @endforeach
        </ul>
        @endif
        @endif
    </div>
</div>
@endforeach