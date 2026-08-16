<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
{{-- Table --}}
<div class="overflow-x-auto">

    <table class="min-w-full divide-y divide-slate-200">

        <thead class="bg-slate-50">

            <tr>

                <th class="px-5 py-3 text-left text-xs font-semibold
                                   uppercase tracking-wider text-slate-500">
                    User
                </th>

                <th class="px-5 py-3 text-left text-xs font-semibold
                                   uppercase tracking-wider text-slate-500">
                    Role
                </th>

                <th class="px-5 py-3 text-left text-xs font-semibold
                                   uppercase tracking-wider text-slate-500">
                    Leads
                </th>

                <th class="px-5 py-3 text-left text-xs font-semibold
                                   uppercase tracking-wider text-slate-500">
                    Deals
                </th>

                <th class="px-5 py-3 text-left text-xs font-semibold
                                   uppercase tracking-wider text-slate-500">
                    Status
                </th>

                <th class="px-5 py-3 text-left text-xs font-semibold
                                   uppercase tracking-wider text-slate-500">
                    Last Active
                </th>

                <th class="px-5 py-3"></th>

            </tr>

        </thead>


        <tbody class="divide-y divide-slate-100">


            {{-- User 1 --}}
            <tr class="transition hover:bg-slate-50">

                <td class="px-5 py-4">

                    <div class="flex items-center gap-3">

                        <div class="flex h-10 w-10 shrink-0
                                           items-center justify-center
                                           rounded-full bg-indigo-100
                                           text-sm font-bold text-indigo-700">
                            HS
                        </div>

                        <div>

                            <p class="text-sm font-semibold text-slate-900">
                                Hassan
                            </p>

                            <p class="text-xs text-slate-500">
                                hassan@example.com
                            </p>

                        </div>

                    </div>

                </td>


                <td class="px-5 py-4">

                    <span class="inline-flex rounded-full bg-violet-50
                                       px-2.5 py-1 text-xs font-medium
                                       text-violet-700">
                        Administrator
                    </span>

                </td>


                <td class="px-5 py-4 text-sm text-slate-700">
                    42
                </td>


                <td class="px-5 py-4 text-sm text-slate-700">
                    12
                </td>


                <td class="px-5 py-4">

                    <span class="inline-flex items-center gap-1.5
                                       rounded-full bg-emerald-50
                                       px-2.5 py-1 text-xs font-medium
                                       text-emerald-700">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        Active
                    </span>

                </td>


                <td class="px-5 py-4 text-sm text-slate-500">
                    Just now
                </td>


                <td class="px-5 py-4 text-right">

                    <button type="button" class="rounded-lg p-2 text-slate-400
                                       transition hover:bg-slate-100
                                       hover:text-slate-600">
                        •••
                    </button>

                </td>

            </tr>


            {{-- User 2 --}}
            <tr class="transition hover:bg-slate-50">

                <td class="px-5 py-4">

                    <div class="flex items-center gap-3">

                        <div class="flex h-10 w-10 shrink-0
                                           items-center justify-center
                                           rounded-full bg-blue-100
                                           text-sm font-bold text-blue-700">
                            AM
                        </div>

                        <div>

                            <p class="text-sm font-semibold text-slate-900">
                                Ahmed Mohamed
                            </p>

                            <p class="text-xs text-slate-500">
                                ahmed@example.com
                            </p>

                        </div>

                    </div>

                </td>


                <td class="px-5 py-4">

                    <span class="inline-flex rounded-full bg-blue-50
                                       px-2.5 py-1 text-xs font-medium
                                       text-blue-700">
                        Sales Manager
                    </span>

                </td>


                <td class="px-5 py-4 text-sm text-slate-700">
                    38
                </td>


                <td class="px-5 py-4 text-sm text-slate-700">
                    9
                </td>


                <td class="px-5 py-4">

                    <span class="inline-flex items-center gap-1.5
                                       rounded-full bg-emerald-50
                                       px-2.5 py-1 text-xs font-medium
                                       text-emerald-700">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        Active
                    </span>

                </td>


                <td class="px-5 py-4 text-sm text-slate-500">
                    10 min ago
                </td>


                <td class="px-5 py-4 text-right">

                    <button type="button" class="rounded-lg p-2 text-slate-400
                                       transition hover:bg-slate-100
                                       hover:text-slate-600">
                        •••
                    </button>

                </td>

            </tr>


            {{-- User 3 --}}
            <tr class="transition hover:bg-slate-50">

                <td class="px-5 py-4">

                    <div class="flex items-center gap-3">

                        <div class="flex h-10 w-10 shrink-0
                                           items-center justify-center
                                           rounded-full bg-amber-100
                                           text-sm font-bold text-amber-700">
                            MK
                        </div>

                        <div>

                            <p class="text-sm font-semibold text-slate-900">
                                Mohamed Khaled
                            </p>

                            <p class="text-xs text-slate-500">
                                mohamed@example.com
                            </p>

                        </div>

                    </div>

                </td>


                <td class="px-5 py-4">

                    <span class="inline-flex rounded-full bg-slate-100
                                       px-2.5 py-1 text-xs font-medium
                                       text-slate-700">
                        Sales Representative
                    </span>

                </td>


                <td class="px-5 py-4 text-sm text-slate-700">
                    27
                </td>


                <td class="px-5 py-4 text-sm text-slate-700">
                    6
                </td>


                <td class="px-5 py-4">

                    <span class="inline-flex items-center gap-1.5
                                       rounded-full bg-emerald-50
                                       px-2.5 py-1 text-xs font-medium
                                       text-emerald-700">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        Active
                    </span>

                </td>


                <td class="px-5 py-4 text-sm text-slate-500">
                    1 hour ago
                </td>


                <td class="px-5 py-4 text-right">

                    <button type="button" class="rounded-lg p-2 text-slate-400
                                       transition hover:bg-slate-100
                                       hover:text-slate-600">
                        •••
                    </button>

                </td>

            </tr>


            {{-- User 4 --}}
            <tr class="transition hover:bg-slate-50">

                <td class="px-5 py-4">

                    <div class="flex items-center gap-3">

                        <div class="flex h-10 w-10 shrink-0
                                           items-center justify-center
                                           rounded-full bg-rose-100
                                           text-sm font-bold text-rose-700">
                            SA
                        </div>

                        <div>

                            <p class="text-sm font-semibold text-slate-900">
                                Sara Ali
                            </p>

                            <p class="text-xs text-slate-500">
                                sara@example.com
                            </p>

                        </div>

                    </div>

                </td>


                <td class="px-5 py-4">

                    <span class="inline-flex rounded-full bg-slate-100
                                       px-2.5 py-1 text-xs font-medium
                                       text-slate-700">
                        Sales Representative
                    </span>

                </td>


                <td class="px-5 py-4 text-sm text-slate-700">
                    19
                </td>


                <td class="px-5 py-4 text-sm text-slate-700">
                    4
                </td>


                <td class="px-5 py-4">

                    <span class="inline-flex items-center gap-1.5
                                       rounded-full bg-slate-100
                                       px-2.5 py-1 text-xs font-medium
                                       text-slate-500">
                        <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                        Inactive
                    </span>

                </td>


                <td class="px-5 py-4 text-sm text-slate-500">
                    3 days ago
                </td>


                <td class="px-5 py-4 text-right">

                    <button type="button" class="rounded-lg p-2 text-slate-400
                                       transition hover:bg-slate-100
                                       hover:text-slate-600">
                        •••
                    </button>

                </td>

            </tr>


        </tbody>

    </table>

</div>