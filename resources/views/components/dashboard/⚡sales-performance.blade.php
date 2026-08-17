<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
<div class="rounded-xl border border-slate-200 bg-white shadow-sm">

    <div class="flex flex-col gap-2 border-b border-slate-200 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">

        <div>
            <h2 class="text-sm font-semibold text-slate-900">
                Sales Performance
            </h2>

            <p class="mt-1 text-xs text-slate-500">
                Monthly revenue performance.
            </p>
        </div>

        <div class="flex items-center gap-4 text-xs text-slate-500">

            <div class="flex items-center gap-2">
                <span class="h-2.5 w-2.5 rounded-full bg-indigo-500"></span>
                Revenue
            </div>

            <div class="flex items-center gap-2">
                <span class="h-2.5 w-2.5 rounded-full bg-slate-200"></span>
                Target
            </div>

        </div>

    </div>


    <div class="p-5">

        <div class="flex h-64 items-end gap-3 sm:gap-6">

            {{-- Jan --}}
            <div class="flex h-full flex-1 flex-col items-center justify-end gap-2">

                <div class="flex w-full items-end justify-center gap-1">

                    <div class="w-1/2 rounded-t-md bg-indigo-500" style="height: 42%"></div>

                    <div class="w-1/2 rounded-t-md bg-slate-100" style="height: 52%"></div>

                </div>

                <span class="text-xs text-slate-400">
                    Jan
                </span>

            </div>


            {{-- Feb --}}
            <div class="flex h-full flex-1 flex-col items-center justify-end gap-2">

                <div class="flex w-full items-end justify-center gap-1">

                    <div class="w-1/2 rounded-t-md bg-indigo-500" style="height: 54%"></div>

                    <div class="w-1/2 rounded-t-md bg-slate-100" style="height: 60%"></div>

                </div>

                <span class="text-xs text-slate-400">
                    Feb
                </span>

            </div>


            {{-- Mar --}}
            <div class="flex h-full flex-1 flex-col items-center justify-end gap-2">

                <div class="flex w-full items-end justify-center gap-1">

                    <div class="w-1/2 rounded-t-md bg-indigo-500" style="height: 64%"></div>

                    <div class="w-1/2 rounded-t-md bg-slate-100" style="height: 67%"></div>

                </div>

                <span class="text-xs text-slate-400">
                    Mar
                </span>

            </div>


            {{-- Apr --}}
            <div class="flex h-full flex-1 flex-col items-center justify-end gap-2">

                <div class="flex w-full items-end justify-center gap-1">

                    <div class="w-1/2 rounded-t-md bg-indigo-500" style="height: 58%"></div>

                    <div class="w-1/2 rounded-t-md bg-slate-100" style="height: 72%"></div>

                </div>

                <span class="text-xs text-slate-400">
                    Apr
                </span>

            </div>


            {{-- May --}}
            <div class="flex h-full flex-1 flex-col items-center justify-end gap-2">

                <div class="flex w-full items-end justify-center gap-1">

                    <div class="w-1/2 rounded-t-md bg-indigo-500" style="height: 76%"></div>

                    <div class="w-1/2 rounded-t-md bg-slate-100" style="height: 78%"></div>

                </div>

                <span class="text-xs text-slate-400">
                    May
                </span>

            </div>


            {{-- Jun --}}
            <div class="flex h-full flex-1 flex-col items-center justify-end gap-2">

                <div class="flex w-full items-end justify-center gap-1">

                    <div class="w-1/2 rounded-t-md bg-indigo-500" style="height: 88%"></div>

                    <div class="w-1/2 rounded-t-md bg-slate-100" style="height: 82%"></div>

                </div>

                <span class="text-xs text-slate-400">
                    Jun
                </span>

            </div>

        </div>

    </div>

</div>