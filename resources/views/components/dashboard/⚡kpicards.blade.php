<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

    {{-- Leads --}}

    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>
                <p class="text-sm font-medium text-slate-500">
                    Total Leads
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                    1,284
                </p>
            </div>

            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-50 text-indigo-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>

            </div>

        </div>

        <div class="mt-4 flex items-center gap-2 text-xs">

            <span class="font-semibold text-emerald-600">
                +12.5%
            </span>

            <span class="text-slate-500">
                vs last month
            </span>

        </div>

    </div>


    {{-- Deals --}}

    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>
                <p class="text-sm font-medium text-slate-500">
                    Active Deals
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                    186
                </p>
            </div>

            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-10V6m0 12v-2m0 0c-2.21 0-4-1.343-4-3m8 0c0 1.657-1.79 3-4 3m0-12c2.21 0 4 1.343 4 3" />
                </svg>

            </div>

        </div>

        <div class="mt-4 flex items-center gap-2 text-xs">

            <span class="font-semibold text-emerald-600">
                +8.2%
            </span>

            <span class="text-slate-500">
                vs last month
            </span>

        </div>

    </div>


    {{-- Revenue --}}

    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>
                <p class="text-sm font-medium text-slate-500">
                    Revenue
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                    $84,250
                </p>
            </div>

            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-50 text-blue-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-10V6m0 12v-2m0 0c-2.21 0-4-1.343-4-3m8 0c0 1.657-1.79 3-4 3m0-12c2.21 0 4 1.343 4 3" />
                </svg>

            </div>

        </div>

        <div class="mt-4 flex items-center gap-2 text-xs">

            <span class="font-semibold text-emerald-600">
                +18.4%
            </span>

            <span class="text-slate-500">
                vs last month
            </span>

        </div>

    </div>


    {{-- Conversion --}}

    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>
                <p class="text-sm font-medium text-slate-500">
                    Conversion Rate
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                    24.8%
                </p>
            </div>

            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-violet-50 text-violet-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg>

            </div>

        </div>

        <div class="mt-4 flex items-center gap-2 text-xs">

            <span class="font-semibold text-emerald-600">
                +3.1%
            </span>

            <span class="text-slate-500">
                vs last month
            </span>

        </div>

    </div>

</div>