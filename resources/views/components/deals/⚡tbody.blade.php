<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
<tbody class="divide-y divide-slate-100">

    {{-- Deal Row --}}
    <tr class="transition hover:bg-slate-50">

        <td class="px-4 py-4">
            <input type="checkbox" class="rounded border-slate-300
                                       text-indigo-600
                                       focus:ring-indigo-500">
        </td>


        <td class="px-4 py-4">

            <div>
                <p class="text-sm font-semibold text-slate-900">
                    Enterprise Software License
                </p>

                <p class="mt-0.5 text-xs text-slate-500">
                    #DEAL-00124
                </p>
            </div>

        </td>


        <td class="px-4 py-4">

            <p class="text-sm font-medium text-slate-800">
                John Smith
            </p>

            <p class="mt-0.5 text-xs text-slate-500">
                Acme Corporation
            </p>

        </td>


        <td class="px-4 py-4">

            <span class="text-sm text-slate-600">
                Sales Pipeline
            </span>

        </td>


        <td class="px-4 py-4">

            <span class="inline-flex rounded-full
                                       bg-blue-50 px-2.5 py-1
                                       text-xs font-medium text-blue-700">
                Proposal
            </span>

        </td>


        <td class="px-4 py-4">

            <p class="text-sm font-semibold text-slate-900">
                $25,000
            </p>

        </td>


        <td class="px-4 py-4">

            <div class="flex items-center gap-2">

                <div class="flex h-7 w-7 items-center
                                           justify-center rounded-full
                                           bg-indigo-100 text-[10px]
                                           font-bold text-indigo-700">
                    HS
                </div>

                <span class="text-sm text-slate-600">
                    Hassan
                </span>

            </div>

        </td>


        <td class="px-4 py-4">

            <span class="text-sm text-slate-600">
                Sep 24, 2026
            </span>

        </td>


        <td class="px-4 py-4 text-right">

            <button type="button" class="rounded-lg p-2 text-slate-400
                                       hover:bg-slate-100
                                       hover:text-slate-600">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                </svg>
            </button>

        </td>

    </tr>


    {{-- Deal Row --}}
    <tr class="transition hover:bg-slate-50">

        <td class="px-4 py-4">
            <input type="checkbox" class="rounded border-slate-300
                                       text-indigo-600
                                       focus:ring-indigo-500">
        </td>

        <td class="px-4 py-4">
            <p class="text-sm font-semibold text-slate-900">
                CRM Implementation
            </p>

            <p class="mt-0.5 text-xs text-slate-500">
                #DEAL-00123
            </p>
        </td>

        <td class="px-4 py-4">

            <p class="text-sm font-medium text-slate-800">
                Sarah Johnson
            </p>

            <p class="mt-0.5 text-xs text-slate-500">
                Tech Solutions
            </p>

        </td>

        <td class="px-4 py-4">
            <span class="text-sm text-slate-600">
                Sales Pipeline
            </span>
        </td>

        <td class="px-4 py-4">

            <span class="inline-flex rounded-full
                                       bg-violet-50 px-2.5 py-1
                                       text-xs font-medium text-violet-700">
                Negotiation
            </span>

        </td>

        <td class="px-4 py-4">
            <p class="text-sm font-semibold text-slate-900">
                $18,500
            </p>
        </td>

        <td class="px-4 py-4">

            <div class="flex items-center gap-2">

                <div class="flex h-7 w-7 items-center
                                           justify-center rounded-full
                                           bg-blue-100 text-[10px]
                                           font-bold text-blue-700">
                    AH
                </div>

                <span class="text-sm text-slate-600">
                    Ahmed
                </span>

            </div>

        </td>

        <td class="px-4 py-4">
            <span class="text-sm text-slate-600">
                Sep 18, 2026
            </span>
        </td>

        <td class="px-4 py-4 text-right">

            <button type="button" class="rounded-lg p-2 text-slate-400
                                       hover:bg-slate-100">
                •••
            </button>

        </td>

    </tr>


    <livewire:deals.empty-state />
</tbody>