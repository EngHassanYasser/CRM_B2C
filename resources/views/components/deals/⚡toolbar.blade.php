<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
{{-- Toolbar --}}
<div x-data="{
            filtersOpen: false
        }" class="rounded-xl border border-slate-200 bg-white shadow-sm">

    <div class="flex flex-col gap-3 p-4 lg:flex-row lg:items-center">

        {{-- Search --}}
        <div class="relative flex-1">

            <svg class="absolute left-3 top-1/2 h-4 w-4
                           -translate-y-1/2 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m21 21-4.35-4.35m2.35-5.65a8 8 0 1 1-16 0 8 8 0 0 1 16 0z" />
            </svg>

            <input type="search" placeholder="Search deals..." class="h-10 w-full rounded-lg border border-slate-200
                           bg-slate-50 pl-10 pr-4 text-sm outline-none
                           transition focus:border-indigo-400
                           focus:bg-white focus:ring-2
                           focus:ring-indigo-100">

        </div>


        {{-- Pipeline --}}
        <select class="h-10 rounded-lg border border-slate-200
                       bg-white px-3 text-sm text-slate-600
                       outline-none focus:border-indigo-400
                       focus:ring-2 focus:ring-indigo-100">
            <option>All Pipelines</option>
            <option>Sales Pipeline</option>
            <option>Enterprise Pipeline</option>
        </select>


        {{-- Stage --}}
        <select class="h-10 rounded-lg border border-slate-200
                       bg-white px-3 text-sm text-slate-600
                       outline-none focus:border-indigo-400
                       focus:ring-2 focus:ring-indigo-100">
            <option>All Stages</option>
            <option>Qualification</option>
            <option>Proposal</option>
            <option>Negotiation</option>
            <option>Closed Won</option>
            <option>Closed Lost</option>
        </select>


        {{-- Owner --}}
        <select class="h-10 rounded-lg border border-slate-200
                       bg-white px-3 text-sm text-slate-600
                       outline-none focus:border-indigo-400
                       focus:ring-2 focus:ring-indigo-100">
            <option>All Owners</option>
            <option>Hassan</option>
            <option>Ahmed</option>
            <option>Mohamed</option>
        </select>


        {{-- More Filters --}}
        <button type="button" @click="filtersOpen = !filtersOpen" class="inline-flex h-10 items-center justify-center
                       gap-2 rounded-lg border border-slate-200
                       px-3 text-sm font-medium text-slate-600
                       hover:bg-slate-50">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h18M6 12h12M10 20h4" />
            </svg>

            Filters
        </button>

    </div>


    {{-- Advanced Filters --}}
    <div x-show="filtersOpen" x-collapse class="border-t border-slate-200 p-4">

        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

            <div>
                <label class="mb-1.5 block text-xs font-medium text-slate-600">
                    Minimum Value
                </label>

                <input type="number" placeholder="$0" class="h-10 w-full rounded-lg
                               border border-slate-200 px-3
                               text-sm outline-none
                               focus:border-indigo-400
                               focus:ring-2 focus:ring-indigo-100">
            </div>

            <div>
                <label class="mb-1.5 block text-xs font-medium text-slate-600">
                    Maximum Value
                </label>

                <input type="number" placeholder="$100,000" class="h-10 w-full rounded-lg
                               border border-slate-200 px-3
                               text-sm outline-none
                               focus:border-indigo-400
                               focus:ring-2 focus:ring-indigo-100">
            </div>

            <div>
                <label class="mb-1.5 block text-xs font-medium text-slate-600">
                    Expected Close Date
                </label>

                <input type="date" class="h-10 w-full rounded-lg
                               border border-slate-200 px-3
                               text-sm outline-none
                               focus:border-indigo-400
                               focus:ring-2 focus:ring-indigo-100">
            </div>

        </div>

    </div>

</div>