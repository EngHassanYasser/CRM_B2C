<div class="flex flex-col gap-3 border-t border-slate-200 px-4 py-4
            sm:flex-row sm:items-center sm:justify-between">

    {{-- Results info --}}
    <p class="text-sm text-slate-500">
        Showing

        <span class="font-medium text-slate-700">
            {{ $activities->firstItem() }}
        </span>

        to

        <span class="font-medium text-slate-700">
            {{ $activities->lastItem() }}
        </span>

        of

        <span class="font-medium text-slate-700">
            {{ $activities->total() }}
        </span>

        activities
    </p>


    {{-- Pagination --}}
    <div class="flex items-center gap-1">

        {{-- Previous --}}
        <button
            type="button"
            wire:click="previousPage"
            wire:loading.attr="disabled"
            @disabled($activities->onFirstPage())
            class="rounded-lg border border-slate-200 px-3 py-2 text-sm
                   text-slate-600 hover:bg-slate-50
                   disabled:cursor-not-allowed disabled:text-slate-400
                   disabled:hover:bg-white"
        >
            Previous
        </button>


        {{-- Pages --}}
        @foreach ($activities->getUrlRange(1, $activities->lastPage()) as $page => $url)

            <button
                type="button"
                wire:click="gotoPage({{ $page }})"
                class="rounded-lg border px-3 py-2 text-sm
                       {{ $activities->currentPage() === $page
                            ? 'border-indigo-600 bg-indigo-600 font-medium text-white'
                            : 'border-slate-200 text-slate-600 hover:bg-slate-50'
                       }}"
            >
                {{ $page }}
            </button>

        @endforeach


        {{-- Next --}}
        <button
            type="button"
            wire:click="nextPage"
            wire:loading.attr="disabled"
            @disabled(!$activities->hasMorePages())
            class="rounded-lg border border-slate-200 px-3 py-2 text-sm
                   text-slate-600 hover:bg-slate-50
                   disabled:cursor-not-allowed disabled:text-slate-400
                   disabled:hover:bg-white"
        >
            Next
        </button>

    </div>

</div>