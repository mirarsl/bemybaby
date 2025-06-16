@if ($paginator->hasPages())
<ul class="styled-pagination text-center clearfix list-unstyled">
    @if (!$paginator->onFirstPage())
    <li class="arrow prev"> <a href="{{ $paginator->currentPage() == 2 ? str_replace('?page=1','',$paginator->previousPageUrl()) : $paginator->previousPageUrl() }}"><span class="icon-left-arrow"></span></a> </li>
    @endif
    @foreach ($elements as $element)
    @if (is_string($element))
    @endif
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="active"><a>{{ $page }}</a></li>
    @else
    <li><a href="{{ $page == 1 ? str_replace('?page=1','',$url) : $url }}">{{ $page }}</a></li>
    @endif
    @endforeach
    @endif
    @endforeach
    @if ($paginator->hasMorePages())
    <li class="arrow next"> <a href="{{ $paginator->nextPageUrl() }}"><span class="icon-right-arrow"></span></a> </li>
    @endif
  </ul>
@endif