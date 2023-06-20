@if ($paginator->hasPages())
<nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
    <div class="flex justify-between flex-1 sm:hidden">
        @if ($paginator->onFirstPage())
        <span class="relative inline-flex items-center px-4 py-2 mx-2 text-sm font-medium text-primary dark:text-gray-500 bg-gray-200 dark:bg-primary cursor-default leading-5 rounded-md">
            {!! __('pagination.previous') !!}
        </span>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-primary dark:text-purple bg-purple dark:bg-primary leading-5 rounded-md hover:font-semibold focus:outline-none transition ease-in-out duration-150">
            {!! __('pagination.previous') !!}
        </a>
        @endif

        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 mx-2 text-sm font-medium  text-primary dark:text-purple bg-purple dark:bg-primary leading-5 rounded-md hover:font-semibold focus:outline-none transition ease-in-out duration-150">
            {!! __('pagination.next') !!}
        </a>
        @else
        <span class="relative inline-flex items-center px-4 py-2 mx-2 text-sm font-medium text-primary dark:text-gray-500 bg-gray-200 dark:bg-primary cursor-default rounded-md">
            {!! __('pagination.next') !!}
        </span>
        @endif
    </div>

    <div class="hidden sm:flex sm:items-center">
        <div class="mx-4">
            <p class="text-sm text-primary dark:text-purple">
                Showing
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                to
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
                of
                <span class="font-medium">{{ $paginator->total() }}</span>
                results
            </p>
        </div>

        <div>
            <span class="relative z-0 inline-flex shadow-sm">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                    <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-primary dark:text-purple bg-dark-purple dark:bg-primary border border-dark-purple cursor-default rounded-l-md leading-5" aria-hidden="true">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </span>
                @else
                <a href="{{ $paginator->appends(request()->query())->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-primary dark:text-purple bg-dark-purple dark:bg-primary border border-dark-purple leading-5 rounded-l-md hover:font-semibold transition ease-in-out duration-150" aria-label="{{ __('pagination.previous') }}">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                @endif

                {{-- Numbered Page Links --}}
                @foreach ($elements as $element)
                @if (is_string($element))
                <span aria-disabled="true">
                    <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-primary dark:text-purple bg-gray-200 dark:bg-primary border border-dark-purple cursor-default leading-5">{{ $element }}</span>
                </span>
                @endif

                @if (is_array($element))
                @foreach ($element as $page => $url)
                <a href="{{ $url }}" aria-current="page" class="{{ $page == $paginator->currentPage() ? 'relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-primary bg-purple dark:bg-dark-purple border border-dark-purple cursor-default leading-5' : 'relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-primary dark:text-purple bg-gray-100 dark:bg-primary border border-dark-purple leading-5 hover:text-semibold transition ease-in-out duration-150' }}">{{ $page }}</a>
                @endforeach
                @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())    
                <a href="{{ $paginator->appends(request()->query())->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-primary dark:text-purple bg-dark-purple dark:bg-primary border border-dark-purple leading-5 rounded-r-md hover:font-semibold transition ease-in-out duration-150" aria-label="{{ __('pagination.next') }}">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                @else
                <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                    <span class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-primary dark:text-purple bg-dark-purple dark:bg-primary border border-dark-purple cursor-default rounded-r-md leading-5" aria-hidden="true">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </span>
                @endif
            </span>
        </div>
    </div>
</nav>
@endif