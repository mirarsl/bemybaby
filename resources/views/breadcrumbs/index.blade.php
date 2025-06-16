@unless ($breadcrumbs->isEmpty())
    <nav aria-label="breadcrumb">
        <ul class="thm-breadcrumb list-unstyled">
            @foreach ($breadcrumbs as $breadcrumb)
            
            @if ($breadcrumb->url && !$loop->last)
            <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            <li><span class="icon-arrow-left"></span></li>
            @else
            <li aria-current="page">{{ $breadcrumb->title }}</li>
            @endif
            @endforeach
        </ul>
    </nav>
@endunless
