<?php

use Livewire\Component;

new class extends Component
{
    //
};
?> 

{{-- =========================
TABLE
========================== --}}

<div class="overflow-x-auto">

    <table class="min-w-full divide-y
                          divide-slate-200">

        <thead class="bg-slate-50">

            <tr>

                <th class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Lead
                </th>

                <th class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Source
                </th>

                <th class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Status
                </th>

                <th class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Owner
                </th>

                <th class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Last Activity
                </th>

                <th class="px-4 py-3"></th>

            </tr>

        </thead>


        <tbody class="divide-y divide-slate-100">


            {{-- Lead --}}
            <tr class="transition hover:bg-slate-50">

                <td class="px-4 py-4">

                    <div class="flex items-center gap-3">

                        <div class="flex h-9 w-9 shrink-0
                                           items-center justify-center
                                           rounded-full
                                           bg-indigo-100
                                           text-xs font-bold
                                           text-indigo-700">
                            JS
                        </div>


                        <div>

                            <p class="text-sm font-semibold
                                               text-slate-900">
                                John Smith
                            </p>

                            <p class="text-xs text-slate-500">
                                john@example.com
                            </p>

                        </div>

                    </div>

                </td>

                <td class="px-4 py-4 text-sm text-slate-600">
                    LinkedIn
                </td>


                <td class="px-4 py-4">

                    <span class="inline-flex rounded-full
                                       bg-blue-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-blue-700">
                        New
                    </span>

                </td>


                <td class="px-4 py-4">

                    <div class="flex items-center gap-2">

                        <div class="flex h-7 w-7
                                           items-center justify-center
                                           rounded-full
                                           bg-indigo-100
                                           text-[10px] font-bold
                                           text-indigo-700">
                            HS
                        </div>

                        <span class="text-sm text-slate-600">
                            Hassan
                        </span>

                    </div>

                </td>


                <td class="px-4 py-4 text-sm text-slate-500">
                    2 hours ago
                </td>


                <td class="px-4 py-4 text-right">

                    <button type="button" class="rounded-lg p-2
                                       text-slate-400
                                       hover:bg-slate-100">
                        •••
                    </button>

                </td>

            </tr>


            {{-- Lead --}}
            <tr class="transition hover:bg-slate-50">

                <td class="px-4 py-4">

                    <div class="flex items-center gap-3">

                        <div class="flex h-9 w-9
                                           shrink-0 items-center
                                           justify-center
                                           rounded-full
                                           bg-emerald-100
                                           text-xs font-bold
                                           text-emerald-700">
                            SJ
                        </div>


                        <div>

                            <p class="text-sm font-semibold
                                               text-slate-900">
                                Sarah Johnson
                            </p>

                            <p class="text-xs text-slate-500">
                                sarah@example.com
                            </p>

                        </div>

                    </div>

                </td>

                <td class="px-4 py-4 text-sm text-slate-600">
                    Website
                </td>


                <td class="px-4 py-4">

                    <span class="inline-flex rounded-full
                                       bg-amber-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-amber-700">
                        Contacted
                    </span>

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


                <td class="px-4 py-4 text-sm text-slate-500">
                    Yesterday
                </td>


                <td class="px-4 py-4 text-right">

                    <button type="button" class="rounded-lg p-2
                                       text-slate-400
                                       hover:bg-slate-100">
                        •••
                    </button>

                </td>

            </tr>


            {{-- Lead --}}
            <tr class="transition hover:bg-slate-50">

                <td class="px-4 py-4">

                    <div class="flex items-center gap-3">

                        <div class="flex h-9 w-9 shrink-0
                                           items-center justify-center
                                           rounded-full bg-violet-100
                                           text-xs font-bold
                                           text-violet-700">
                            MK
                        </div>


                        <div>

                            <p class="text-sm font-semibold
                                               text-slate-900">
                                Michael King
                            </p>

                            <p class="text-xs text-slate-500">
                                michael@example.com
                            </p>

                        </div>

                    </div>

                </td>


                <td class="px-4 py-4 text-sm text-slate-600">
                    Referral
                </td>


                <td class="px-4 py-4">

                    <span class="inline-flex rounded-full
                                       bg-emerald-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-emerald-700">
                        Qualified
                    </span>

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


                <td class="px-4 py-4 text-sm text-slate-500">
                    3 days ago
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

    </table>

</div>