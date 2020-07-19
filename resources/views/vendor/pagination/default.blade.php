@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled page-item prev-item"><a class="page-link"></a></li>
            @else
                <li class="page-item prev-item"><a class="page-link"  href="{{ $paginator->previousPageUrl() }}" rel="prev"></a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><a class="page-link">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item next-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"></a></li>
            @else
                <li class="disabled page-item next-item"><a class="page-link"></a></li>
            @endif
        </ul>
    </nav>
@endif
