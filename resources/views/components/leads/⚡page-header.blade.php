<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
{{-- =========================
PAGE HEADER
========================== --}}

<div class="mb-7 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">

    <div>

        <div class="mb-1 flex items-center gap-2 text-xs text-slate-500">

            <span>Workspace</span>

            <span>/</span>

            <span class="text-slate-700">
                Leads
            </span>

        </div>


        <h1 class="text-2xl font-bold tracking-tight text-slate-900">
            Leads
        </h1>


        <p class="mt-1 text-sm text-slate-500">
            Manage and track your potential customers.
        </p>

    </div>


    <button type="button" class="inline-flex h-10 items-center
                   justify-center gap-2 rounded-lg
                   bg-indigo-600 px-4 text-sm
                   font-semibold text-white
                   shadow-sm transition
                   hover:bg-indigo-700
                   focus:outline-none
                   focus:ring-2
                   focus:ring-indigo-500
                   focus:ring-offset-2"
                @click="model = true">
        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>

        Add Lead

    </button>

</div>