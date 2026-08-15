<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>


    {{-- Stats --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

        {{-- Total Deals --}}
        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Deals
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        86
                    </p>
                </div>

                <div class="rounded-lg bg-indigo-50 p-2.5 text-indigo-600">
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V6m0 10v2m0-12a9 9 0 110 18 9 9 0 010-18z"
                        />
                    </svg>
                </div>

            </div>

            <p class="mt-3 text-xs text-emerald-600">
                +12% from last month
            </p>

        </div>


        {{-- Open Deals --}}
        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Open Deals
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        54
                    </p>
                </div>

                <div class="rounded-lg bg-blue-50 p-2.5 text-blue-600">
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 12l2 2 4-4m6-2a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                    </svg>
                </div>

            </div>

            <p class="mt-3 text-xs text-slate-500">
                Currently in progress
            </p>

        </div>


        {{-- Won Deals --}}
        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Won Deals
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        21
                    </p>
                </div>

                <div class="rounded-lg bg-emerald-50 p-2.5 text-emerald-600">
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 13l4 4L19 7"
                        />
                    </svg>
                </div>

            </div>

            <p class="mt-3 text-xs text-emerald-600">
                24.4% win rate
            </p>

        </div>


        {{-- Pipeline Value --}}
        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Pipeline Value
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        $184,500
                    </p>
                </div>

                <div class="rounded-lg bg-violet-50 p-2.5 text-violet-600">
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V6m0 10v2m0-12a9 9 0 110 18 9 9 0 010-18z"
                        />
                    </svg>
                </div>

            </div>

            <p class="mt-3 text-xs text-slate-500">
                Total open pipeline value
            </p>

        </div>

    </div>
