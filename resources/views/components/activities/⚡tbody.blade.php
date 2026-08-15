<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
<tbody class="divide-y divide-slate-100">


    {{-- Call --}}

    <tr class="transition hover:bg-slate-50">

        <td class="px-4 py-4">

            <div class="flex items-center gap-3">

                <div class="flex h-9 w-9
                                           shrink-0 items-center
                                           justify-center
                                           rounded-lg
                                           bg-blue-50
                                           text-blue-600">

                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a2 2 0 011.94 1.515l.58 2.32a2 2 0 01-.45 1.91l-1.27 1.27a16 16 0 006.36 6.36l1.27-1.27a2 2 0 011.91-.45l2.32.58A2 2 0 0121 17.72V21a2 2 0 01-2 2h-1C9.716 23 1 14.284 1 3V2a2 2 0 012-2z" />
                    </svg>

                </div>


                <div>

                    <p class="text-sm font-semibold
                                               text-slate-900">
                        Follow-up Call
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

            <p class="text-sm text-slate-700">
                Today
            </p>

            <p class="text-xs text-slate-500">
                10:30 AM
            </p>

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


    {{-- Meeting --}}

    <tr class="transition hover:bg-slate-50">

        <td class="px-4 py-4">

            <div class="flex items-center gap-3">

                <div class="flex h-9 w-9
                                           shrink-0 items-center
                                           justify-center
                                           rounded-lg
                                           bg-violet-50
                                           text-violet-600">

                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>

                </div>


                <div>

                    <p class="text-sm font-semibold
                                               text-slate-900">
                        Product Demo
                    </p>

                    <p class="text-xs text-slate-500">
                        Present CRM features
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
                02:00 PM
            </p>

        </td>


        <td class="px-4 py-4">

            <span class="inline-flex rounded-full
                                       bg-amber-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-amber-700">
                Scheduled
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


    {{-- Email --}}

    <tr class="transition hover:bg-slate-50">

        <td class="px-4 py-4">

            <div class="flex items-center gap-3">

                <div class="flex h-9 w-9
                                           shrink-0 items-center
                                           justify-center
                                           rounded-lg
                                           bg-emerald-50
                                           text-emerald-600">

                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 00-2 2z" />
                    </svg>

                </div>


                <div>

                    <p class="text-sm font-semibold
                                               text-slate-900">
                        Proposal Email
                    </p>

                    <p class="text-xs text-slate-500">
                        Sent pricing proposal
                    </p>

                </div>

            </div>

        </td>


        <td class="px-4 py-4">

            <p class="text-sm font-medium text-slate-700">
                Sarah Johnson
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

            <p class="text-sm text-slate-700">
                Yesterday
            </p>

            <p class="text-xs text-slate-500">
                04:15 PM
            </p>

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

</tbody>