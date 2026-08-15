<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

{{-- Filters --}}

<div class="flex flex-wrap items-center gap-2">

    <button type="button" @click="filterOpen = !filterOpen" class="inline-flex h-10 items-center
                               gap-2 rounded-lg border
                               border-slate-200 bg-white
                               px-3 text-sm font-medium
                               text-slate-600
                               hover:bg-slate-50">

        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h18M6 12h12M10 20h4" />
        </svg>

        Filters

    </button>


    <select class="h-10 rounded-lg
                               border border-slate-200
                               bg-white px-3
                               text-sm text-slate-600
                               outline-none">

        <option>
            All Statuses
        </option>

        <option>
            Pending
        </option>

        <option>
            In Progress
        </option>

        <option>
            Completed
        </option>

        <option>
            Cancelled
        </option>

    </select>


    <select class="h-10 rounded-lg
                               border border-slate-200
                               bg-white px-3
                               text-sm text-slate-600
                               outline-none">

        <option>
            All Priorities
        </option>

        <option>
            High
        </option>

        <option>
            Medium
        </option>

        <option>
            Low
        </option>

    </select>


    <select class="h-10 rounded-lg
                               border border-slate-200
                               bg-white px-3
                               text-sm text-slate-600
                               outline-none">

        <option>
            All Users
        </option>

        <option>
            Hassan
        </option>

        <option>
            Ahmed
        </option>

    </select>

</div>