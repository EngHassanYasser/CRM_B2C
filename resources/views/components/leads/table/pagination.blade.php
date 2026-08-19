{{-- Pagination --}}
<div
    class="flex flex-col gap-3 border-t border-slate-200 px-4 py-4
                sm:flex-row sm:items-center sm:justify-between">

    <p class="text-sm text-slate-500">
        Showing

        <span class="font-medium text-slate-700">
            {{ $leads->firstItem() }}
        </span>

        to

        <span class="font-medium text-slate-700">
            {{ $leads->lastItem() }}
        </span>

        of

        <span class="font-medium text-slate-700">
            {{ $leads->total() }}
        </span>

        leads
    </p>


    <div class="flex items-center gap-1">

        {{-- Previous --}}
        <button type="button" wire:click="previousPage" wire:loading.attr="disabled" @disabled($leads->onFirstPage())
            class="rounded-lg border border-slate-200 px-3 py-2 text-sm
                       text-slate-600 hover:bg-slate-50
                       disabled:cursor-not-allowed disabled:text-slate-400">
            Previous
        </button>


        {{-- Pages --}}
        @foreach ($leads->getUrlRange(1, $leads->lastPage()) as $page => $url)
            <button type="button" wire:click="gotoPage({{ $page }})" wire:key="page-{{ $page }}"
                class="rounded-lg border px-3 py-2 text-sm
                        {{ $leads->currentPage() === $page
                            ? 'border-indigo-600 bg-indigo-600 font-medium text-white'
                            : 'border-slate-200 text-slate-600 hover:bg-slate-50' }}">
                {{ $page }}
            </button>
        @endforeach


        {{-- Next --}}
        <button type="button" wire:click="nextPage" wire:loading.attr="disabled" @disabled($leads->currentPage() === $leads->lastPage())
            class="rounded-lg border border-slate-200 px-3 py-2 text-sm
                       text-slate-600 hover:bg-slate-50
                       disabled:cursor-not-allowed disabled:text-slate-400">
            Next
        </button>

    </div>

</div>
