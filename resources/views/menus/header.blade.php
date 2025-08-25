@php
empty($stack) ?  $stack = 0 :''
@endphp
<ul {!! $stack == 0 ? 'class="main-menu__list"' : '' !!}>
	@foreach ($items as $menu_item)
	<li {!! count($menu_item->children) > 0 || isset($menu_item->app_model) ? ($stack > 0 ? 'class="dropdown"' : 'class="dropdown"') : '' !!}>
		<a href='{{ !isset($menu_item->app_model) ? (isset($menu_item->route) ? $menu_item->link() : (isset($menu_item->parameters) ? $menu_item->parameters->{app()->getLocale()} : 'javascript:void(0);') ) : (isset($menu_item->parameters) ? route('page',$menu_item->parameters->{app()->getLocale()}) : 'javascript:void(0);') }}' target="{{$menu_item->target}}">{{ $menu_item->getTranslatedAttribute('title') }}</a>
		@if (count($menu_item->children) > 0 || isset($menu_item->app_model))
		@if (count($menu_item->children) > 0)
		@include('menus.header', ['items' => $menu_item->children, 'stack' => $stack + 1])
		@else
		<ul>
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
			<li @if (isset($item->products) && count($item->products)) class="dropdown" @endif>
				<a href="{{route($menu_item->route,$item->getTranslatedAttribute('slug'))}}" target="{{$menu_item->target}}">{{$item->getTranslatedAttribute('title')}}</a>
				@if (isset($item->products))
					<ul>
						@foreach ($item->products as $prod)
						<li><a href="{{route('product',$prod->getTranslatedAttribute('slug'))}}" target="{{$menu_item->target}}">{{$prod->getTranslatedAttribute('title')}}</a></li>
						@endforeach
					</ul>
				@endif
			</li>
			@endforeach
			@if ($menu_item->app_model == '\App\Category')
			@php
				$model2 = app('App\Service')->active()->where('category_id',null)->order();
				if(isset($menu_item->model_limit)){
					$model2->limit($menu_item->model_limit,0);
				}
			@endphp				
			@foreach ($model2->get() as $item2)
			<li><a href="{{route('product',$item2->getTranslatedAttribute('slug'))}}" target="{{$menu_item->target}}">{{$item2->getTranslatedAttribute('title')}}</a></li>
			@endforeach
			@endif
		</ul>
		@endif
		@endif
	</li>
	@endforeach
</ul>