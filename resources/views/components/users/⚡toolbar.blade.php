<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
{{-- Toolbar --}}
<div class="border-b border-slate-200 p-4 sm:p-5">

    <div class="flex flex-col gap-4
                       xl:flex-row xl:items-center xl:justify-between">

        {{-- Search --}}
        <div class="relative w-full xl:max-w-sm">

            <svg class="absolute left-3 top-1/2 h-4 w-4
                               -translate-y-1/2 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-4.35-4.35m2.35-5.65a8 8 0 1 1-16 0 8 8 0 0 1 16 0z" />
            </svg>

            <input type="search" placeholder="Search users..." class="h-10 w-full rounded-lg border border-slate-200
                               pl-10 pr-4 text-sm outline-none transition
                               placeholder:text-slate-400
                               focus:border-indigo-400
                               focus:ring-2 focus:ring-indigo-100">

        </div>


        {{-- Filters --}}
        <div class="flex flex-wrap items-center gap-2">

            <select class="h-10 rounded-lg border border-slate-200
                               bg-white px-3 text-sm text-slate-600
                               outline-none focus:border-indigo-400">

                <option>
                    All Roles
                </option>

                <option>
                    Administrator
                </option>

                <option>
                    Sales Manager
                </option>

                <option>
                    Sales Representative
                </option>

            </select>


            <select class="h-10 rounded-lg border border-slate-200
                               bg-white px-3 text-sm text-slate-600
                               outline-none focus:border-indigo-400">

                <option>
                    All Statuses
                </option>

                <option>
                    Active
                </option>

                <option>
                    Inactive
                </option>

            </select>

        </div>

    </div>

</div>