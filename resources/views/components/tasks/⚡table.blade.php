<?php

use Livewire\Component;

new class extends Component {
    //
};
?>
<div class="overflow-x-auto">

    <table class="min-w-full divide-y
                          divide-slate-200">
        <thead class="bg-slate-50">

            <tr>

                <th
                    class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Task
                </th>

                <th
                    class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Related To
                </th>

                <th
                    class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Assigned To
                </th>

                <th
                    class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Due Date
                </th>

                <th
                    class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Priority
                </th>

                <th
                    class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Status
                </th>

                <th class="px-4 py-3"></th>

            </tr>

        </thead>
        
        <tbody class="divide-y divide-slate-100">


            {{-- Task 1 --}}

            <tr class="transition hover:bg-slate-50">

                <td class="px-4 py-4">

                    <div class="flex items-center gap-3">

                        <button type="button"
                            class="flex h-5 w-5 shrink-0
                                           items-center justify-center
                                           rounded border
                                           border-slate-300
                                           bg-white
                                           hover:border-indigo-500"></button>


                        <div>

                            <p
                                class="text-sm font-semibold
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

                        <div
                            class="flex h-7 w-7
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

                    <span
                        class="inline-flex rounded-full
                                       bg-rose-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-rose-700">
                        High
                    </span>

                </td>


                <td class="px-4 py-4">

                    <span
                        class="inline-flex rounded-full
                                       bg-amber-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-amber-700">
                        Pending
                    </span>

                </td>


                <td class="px-4 py-4 text-right">

                    <button type="button"
                        class="rounded-lg p-2
                                       text-slate-400
                                       hover:bg-slate-100">
                        •••
                    </button>

                </td>

            </tr>
        </tbody>
    </table>