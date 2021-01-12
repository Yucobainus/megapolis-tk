@if ($paginator->hasPages())

    <div class="custom-paginate">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <div class="disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></div>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pag-buttons">Назад</a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pag-buttons">Далее</a>
            @else
                <div class="disabled" aria-disabled="true"><span>@lang('pagination.next')</span></div>
            @endif

    </div>
@endif
