@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="relative curosr-blocked  inline-flex mx-1 items-center px-4 py-2 text-sm font-medium text-gray-500 bg-yellow-200 border border-gray-300 cursor-default leading-5 rounded-md">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="mx-1 relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-yellow-200 border border-gray-300 leading-5 rounded-md hover:text-white hover:bg-yellow-500 focus:outline-none focus:ring ring-yellow-300 focus:border-yellow-300 active:bg-gray-100 active:text-yellow-700 transition ease-in-out duration-150">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="mx-1 relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-yellow-200 border border-gray-300 leading-5 rounded-md hover:text-white hover:bg-yellow-500  focus:outline-none focus:ring ring-yellow-300 focus:border-yellow-300 active:bg-yellow-100 active:text-gray-700 transition ease-in-out duration-150">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="relative curosr-blocked inline-flex items-center mx-1 px-4 py-2 text-sm font-medium text-gray-500 bg-yellow-200 border border-gray-300 cursor-default leading-5 rounded-md">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
