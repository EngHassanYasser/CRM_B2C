<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

{{-- Danger Zone --}}
<div class="mt-6 rounded-xl border border-rose-200 bg-white shadow-sm">

    <div class="border-b border-rose-100 px-6 py-5">

        <h2 class="text-base font-semibold text-rose-700">
            Danger Zone
        </h2>

        <p class="mt-1 text-sm text-slate-500">
            These actions can permanently affect your CRM data.
        </p>

    </div>


    <div class="flex flex-col gap-4 px-6 py-5 sm:flex-row sm:items-center sm:justify-between">

        <div>

            <p class="text-sm font-medium text-slate-900">
                Delete all CRM data
            </p>

            <p class="mt-1 text-xs text-slate-500">
                Permanently delete leads, deals, activities and tasks.
            </p>

        </div>


        <button type="button" class="h-10 shrink-0 rounded-lg border
                               border-rose-200 bg-white px-4
                               text-sm font-semibold text-rose-600
                               transition hover:bg-rose-50">
            Delete Data
        </button>

    </div>

</div>