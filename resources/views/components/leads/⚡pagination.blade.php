<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
{{-- =========================
PAGINATION
========================== --}}

<div class="flex flex-col gap-3 border-t
                   border-slate-200 px-4 py-4
                   sm:flex-row sm:items-center
                   sm:justify-between">

    <p class="text-sm text-slate-500">

        Showing
        <span class="font-medium text-slate-700">
            1
        </span>

        to

        <span class="font-medium text-slate-700">
            10
        </span>

        of

        <span class="font-medium text-slate-700">
            128
        </span>

        leads

    </p>


    <div class="flex items-center gap-1">

        <button type="button" class="rounded-lg border
                           border-slate-200
                           px-3 py-2 text-sm
                           text-slate-400">
            Previous
        </button>


        <button type="button" class="rounded-lg bg-indigo-600
                           px-3 py-2 text-sm
                           font-medium text-white">
            1
        </button>


        <button type="button" class="rounded-lg border
                           border-slate-200
                           px-3 py-2 text-sm
                           text-slate-600
                           hover:bg-slate-50">
            2
        </button>


        <button type="button" class="rounded-lg border
                           border-slate-200
                           px-3 py-2 text-sm
                           text-slate-600
                           hover:bg-slate-50">
            3
        </button>


        <button type="button" class="rounded-lg border
                           border-slate-200
                           px-3 py-2 text-sm
                           text-slate-600
                           hover:bg-slate-50">
            Next
        </button>

    </div>

</div>