<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
{{-- Page Header --}}
<div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

    <div>
        <div class="flex items-center gap-2 text-sm text-slate-500">
            <span>Sales</span>
            <span>/</span>
            <span>Deals</span>
        </div>

        <h1 class="mt-1 text-2xl font-bold tracking-tight text-slate-900">
            Deals
        </h1>

        <p class="mt-1 text-sm text-slate-500">
            Manage your sales opportunities and track their progress.
        </p>
    </div>

    <button type="button" class="inline-flex items-center justify-center gap-2 rounded-lg
                   bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white
                   shadow-sm transition hover:bg-indigo-700
                   focus:outline-none focus:ring-2
                   focus:ring-indigo-500 focus:ring-offset-2">
        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>

        Create Deal
    </button>

</div>