<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
<tbody class="divide-y divide-slate-100">


    {{-- Task 1 --}}

    <tr class="transition hover:bg-slate-50">

        <td class="px-4 py-4">

            <div class="flex items-center gap-3">

                <button type="button" class="flex h-5 w-5 shrink-0
                                           items-center justify-center
                                           rounded border
                                           border-slate-300
                                           bg-white
                                           hover:border-indigo-500"></button>


                <div>

                    <p class="text-sm font-semibold
                                               text-slate-900">
                        Follow up with John
                    </p>

                    <p class="text-xs text-slate-500">
                        Discuss project requirements
                    </p>

                </div>

            </div>

        </td>


        <td class="px-4 py-4">

            <p class="text-sm font-medium text-slate-700">
                John Smith
            </p>

            <p class="text-xs text-slate-500">
                Lead
            </p>

        </td>


        <td class="px-4 py-4">

            <div class="flex items-center gap-2">

                <div class="flex h-7 w-7
                                           items-center justify-center
                                           rounded-full bg-indigo-100
                                           text-[10px] font-bold
                                           text-indigo-700">
                    HS
                </div>

                <span class="text-sm text-slate-600">
                    Hassan
                </span>

            </div>

        </td>


        <td class="px-4 py-4">

            <p class="text-sm font-medium
                                       text-rose-600">
                Today
            </p>

            <p class="text-xs text-slate-500">
                05:00 PM
            </p>

        </td>


        <td class="px-4 py-4">

            <span class="inline-flex rounded-full
                                       bg-rose-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-rose-700">
                High
            </span>

        </td>


        <td class="px-4 py-4">

            <span class="inline-flex rounded-full
                                       bg-amber-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-amber-700">
                Pending
            </span>

        </td>


        <td class="px-4 py-4 text-right">

            <button type="button" class="rounded-lg p-2
                                       text-slate-400
                                       hover:bg-slate-100">
                •••
            </button>

        </td>

    </tr>


    {{-- Task 2 --}}

    <tr class="transition hover:bg-slate-50">

        <td class="px-4 py-4">

            <div class="flex items-center gap-3">

                <button type="button" class="flex h-5 w-5 shrink-0
                                           items-center justify-center
                                           rounded border
                                           border-slate-300
                                           bg-white
                                           hover:border-indigo-500"></button>


                <div>

                    <p class="text-sm font-semibold
                                               text-slate-900">
                        Send proposal
                    </p>

                    <p class="text-xs text-slate-500">
                        Prepare and send pricing proposal
                    </p>

                </div>

            </div>

        </td>


        <td class="px-4 py-4">

            <p class="text-sm font-medium text-slate-700">
                Acme Corporation
            </p>

            <p class="text-xs text-slate-500">
                Deal
            </p>

        </td>


        <td class="px-4 py-4">

            <div class="flex items-center gap-2">

                <div class="flex h-7 w-7
                                           items-center justify-center
                                           rounded-full bg-blue-100
                                           text-[10px] font-bold
                                           text-blue-700">
                    AH
                </div>

                <span class="text-sm text-slate-600">
                    Ahmed
                </span>

            </div>

        </td>


        <td class="px-4 py-4">

            <p class="text-sm text-slate-700">
                Tomorrow
            </p>

            <p class="text-xs text-slate-500">
                11:00 AM
            </p>

        </td>


        <td class="px-4 py-4">

            <span class="inline-flex rounded-full
                                       bg-amber-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-amber-700">
                Medium
            </span>

        </td>


        <td class="px-4 py-4">

            <span class="inline-flex rounded-full
                                       bg-blue-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-blue-700">
                In Progress
            </span>

        </td>


        <td class="px-4 py-4 text-right">

            <button type="button" class="rounded-lg p-2
                                       text-slate-400
                                       hover:bg-slate-100">
                •••
            </button>

        </td>

    </tr>


    {{-- Task 3 --}}

    <tr class="transition hover:bg-slate-50">

        <td class="px-4 py-4">

            <div class="flex items-center gap-3">

                <button type="button" class="flex h-5 w-5 shrink-0
                                           items-center justify-center
                                           rounded-full
                                           border-2
                                           border-emerald-500
                                           bg-emerald-500">

                    <svg class="h-3 w-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                    </svg>

                </button>


                <div>

                    <p class="text-sm font-semibold
                                               text-slate-400 line-through">
                        Send follow-up email
                    </p>

                    <p class="text-xs text-slate-400">
                        Follow up after product demo
                    </p>

                </div>

            </div>

        </td>


        <td class="px-4 py-4">

            <p class="text-sm font-medium text-slate-500">
                Sarah Johnson
            </p>

            <p class="text-xs text-slate-400">
                Lead
            </p>

        </td>


        <td class="px-4 py-4">

            <div class="flex items-center gap-2">

                <div class="flex h-7 w-7
                                           items-center justify-center
                                           rounded-full bg-indigo-100
                                           text-[10px] font-bold
                                           text-indigo-700">
                    HS
                </div>

                <span class="text-sm text-slate-500">
                    Hassan
                </span>

            </div>

        </td>


        <td class="px-4 py-4">

            <p class="text-sm text-slate-400">
                Yesterday
            </p>

            <p class="text-xs text-slate-400">
                03:30 PM
            </p>

        </td>


        <td class="px-4 py-4">

            <span class="inline-flex rounded-full
                                       bg-slate-100 px-2.5 py-1
                                       text-xs font-medium
                                       text-slate-500">
                Low
            </span>

        </td>


        <td class="px-4 py-4">

            <span class="inline-flex rounded-full
                                       bg-emerald-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-emerald-700">
                Completed
            </span>

        </td>


        <td class="px-4 py-4 text-right">

            <button type="button" class="rounded-lg p-2
                                       text-slate-400
                                       hover:bg-slate-100">
                •••
            </button>

        </td>

    </tr>


    {{-- Task 4 --}}

    <tr class="transition hover:bg-slate-50">

        <td class="px-4 py-4">

            <div class="flex items-center gap-3">

                <button type="button" class="flex h-5 w-5 shrink-0
                                           items-center justify-center
                                           rounded border
                                           border-slate-300
                                           bg-white
                                           hover:border-indigo-500"></button>


                <div>

                    <p class="text-sm font-semibold
                                               text-slate-900">
                        Schedule product demo
                    </p>

                    <p class="text-xs text-slate-500">
                        Arrange meeting with prospect
                    </p>

                </div>

            </div>

        </td>


        <td class="px-4 py-4">

            <p class="text-sm font-medium text-slate-700">
                Digital Agency
            </p>

            <p class="text-xs text-slate-500">
                Deal
            </p>

        </td>


        <td class="px-4 py-4">

            <div class="flex items-center gap-2">

                <div class="flex h-7 w-7
                                           items-center justify-center
                                           rounded-full bg-violet-100
                                           text-[10px] font-bold
                                           text-violet-700">
                    MK
                </div>

                <span class="text-sm text-slate-600">
                    Michael
                </span>

            </div>

        </td>


        <td class="px-4 py-4">

            <p class="text-sm text-slate-700">
                Aug 18, 2026
            </p>

            <p class="text-xs text-slate-500">
                02:00 PM
            </p>

        </td>


        <td class="px-4 py-4">

            <span class="inline-flex rounded-full
                                       bg-amber-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-amber-700">
                Medium
            </span>

        </td>


        <td class="px-4 py-4">

            <span class="inline-flex rounded-full
                                       bg-slate-100 px-2.5 py-1
                                       text-xs font-medium
                                       text-slate-600">
                Pending
            </span>

        </td>


        <td class="px-4 py-4 text-right">

            <button type="button" class="rounded-lg p-2
                                       text-slate-400
                                       hover:bg-slate-100">
                •••
            </button>

        </td>

    </tr>

</tbody>