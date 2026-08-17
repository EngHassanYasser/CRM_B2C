<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="grid grid-cols-1 gap-6 xl:grid-cols-3">

    {{-- Pipeline --}}

    <div class="xl:col-span-2 rounded-xl border border-slate-200 bg-white shadow-sm">

        <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">

            <div>
                <h2 class="text-sm font-semibold text-slate-900">
                    Sales Pipeline
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    Overview of your current deals.
                </p>
            </div>

            <a href="{{ route('deals.index') }}" wire:navigate
                class="text-xs font-semibold text-indigo-600 hover:text-indigo-700">
                View Deals
            </a>

        </div>


        <div class="p-5">

            <div class="space-y-5">

                {{-- Prospecting --}}

                <div>

                    <div class="mb-2 flex items-center justify-between">

                        <div class="flex items-center gap-2">

                            <span class="h-2.5 w-2.5 rounded-full bg-slate-400"></span>

                            <span class="text-sm font-medium text-slate-700">
                                Prospecting
                            </span>

                        </div>

                        <span class="text-xs text-slate-500">
                            42 deals · $18,400
                        </span>

                    </div>

                    <div class="h-2 overflow-hidden rounded-full bg-slate-100">

                        <div class="h-full w-[38%] rounded-full bg-slate-400"></div>

                    </div>

                </div>


                {{-- Qualified --}}

                <div>

                    <div class="mb-2 flex items-center justify-between">

                        <div class="flex items-center gap-2">

                            <span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>

                            <span class="text-sm font-medium text-slate-700">
                                Qualified
                            </span>

                        </div>

                        <span class="text-xs text-slate-500">
                            31 deals · $26,800
                        </span>

                    </div>

                    <div class="h-2 overflow-hidden rounded-full bg-slate-100">

                        <div class="h-full w-[56%] rounded-full bg-blue-500"></div>

                    </div>

                </div>


                {{-- Proposal --}}

                <div>

                    <div class="mb-2 flex items-center justify-between">

                        <div class="flex items-center gap-2">

                            <span class="h-2.5 w-2.5 rounded-full bg-amber-500"></span>

                            <span class="text-sm font-medium text-slate-700">
                                Proposal
                            </span>

                        </div>

                        <span class="text-xs text-slate-500">
                            18 deals · $21,500
                        </span>

                    </div>

                    <div class="h-2 overflow-hidden rounded-full bg-slate-100">

                        <div class="h-full w-[72%] rounded-full bg-amber-500"></div>

                    </div>

                </div>


                {{-- Negotiation --}}

                <div>

                    <div class="mb-2 flex items-center justify-between">

                        <div class="flex items-center gap-2">

                            <span class="h-2.5 w-2.5 rounded-full bg-indigo-500"></span>

                            <span class="text-sm font-medium text-slate-700">
                                Negotiation
                            </span>

                        </div>

                        <span class="text-xs text-slate-500">
                            12 deals · $17,550
                        </span>

                    </div>

                    <div class="h-2 overflow-hidden rounded-full bg-slate-100">

                        <div class="h-full w-[84%] rounded-full bg-indigo-500"></div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Upcoming Activities --}}

    <div class="rounded-xl border border-slate-200 bg-white shadow-sm">

        <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">

            <div>
                <h2 class="text-sm font-semibold text-slate-900">
                    Upcoming Activities
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    Your next activities.
                </p>
            </div>

            <a href="{{ route('activities.index') }}" wire:navigate
                class="text-xs font-semibold text-indigo-600 hover:text-indigo-700">
                View All
            </a>

        </div>


        <div class="divide-y divide-slate-100">

            {{-- Activity --}}

            <div class="flex gap-3 px-5 py-4">

                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-blue-600">

                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5h2l2.4 5.5a1 1 0 01-.1.9L6 13a16 16 0 007 7l1.6-1.3a1 1 0 01.9-.1L21 21v-2a2 2 0 00-2-2h-1" />
                    </svg>

                </div>

                <div class="min-w-0">

                    <p class="truncate text-sm font-medium text-slate-800">
                        Call Ahmed Mohamed
                    </p>

                    <p class="mt-1 text-xs text-slate-500">
                        Today · 10:30 AM
                    </p>

                </div>

            </div>


            <div class="flex gap-3 px-5 py-4">

                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-violet-50 text-violet-600">

                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>

                </div>

                <div class="min-w-0">

                    <p class="truncate text-sm font-medium text-slate-800">
                        Demo with TechCorp
                    </p>

                    <p class="mt-1 text-xs text-slate-500">
                        Tomorrow · 2:00 PM
                    </p>

                </div>

            </div>


            <div class="flex gap-3 px-5 py-4">

                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-amber-50 text-amber-600">

                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5h6M9 9h6M9 13h6M9 17h3M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z" />
                    </svg>

                </div>

                <div class="min-w-0">

                    <p class="truncate text-sm font-medium text-slate-800">
                        Follow up with Sara
                    </p>

                    <p class="mt-1 text-xs text-slate-500">
                        Aug 19 · 11:00 AM
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>