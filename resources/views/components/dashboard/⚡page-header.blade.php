<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
<div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

    <div>
        <h1 class="text-2xl font-bold tracking-tight text-slate-900">
            Dashboard
        </h1>

        <p class="mt-1 text-sm text-slate-500">
            Overview of your sales activity and performance.
        </p>
    </div>

    <div class="flex items-center gap-2">

        <button type="button" class="inline-flex h-10 items-center justify-center gap-2
                       rounded-lg border border-slate-200 bg-white px-4
                       text-sm font-semibold text-slate-700
                       shadow-sm transition hover:bg-slate-50">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>

            This Month
        </button>

        <button type="button" class="inline-flex h-10 items-center justify-center gap-2
                       rounded-lg bg-indigo-600 px-4 text-sm font-semibold
                       text-white shadow-sm transition hover:bg-indigo-700">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>

            Add Lead
        </button>

    </div>

</div>