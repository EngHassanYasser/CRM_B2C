<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="grid grid-cols-1 gap-6 xl:grid-cols-3">

    {{-- Recent Leads --}}

    <div class="xl:col-span-2 overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">

        <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">

            <div>
                <h2 class="text-sm font-semibold text-slate-900">
                    Recent Leads
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    Recently added leads.
                </p>
            </div>

            <a href="{{ route('leads.index') }}" wire:navigate
                class="text-xs font-semibold text-indigo-600 hover:text-indigo-700">
                View All
            </a>

        </div>


        <div class="overflow-x-auto">

            <table class="min-w-full divide-y divide-slate-200">

                <thead class="bg-slate-50">

                    <tr>

                        <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">
                            Lead
                        </th>

                        <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">
                            Company
                        </th>

                        <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">
                            Status
                        </th>

                        <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">
                            Owner
                        </th>

                    </tr>

                </thead>


                <tbody class="divide-y divide-slate-100 bg-white">

                    <tr class="hover:bg-slate-50">

                        <td class="px-5 py-4">

                            <div class="flex items-center gap-3">

                                <div
                                    class="flex h-9 w-9 items-center justify-center rounded-full bg-indigo-100 text-xs font-bold text-indigo-700">
                                    AM
                                </div>

                                <div>
                                    <p class="text-sm font-semibold text-slate-800">
                                        Ahmed Mohamed
                                    </p>

                                    <p class="text-xs text-slate-500">
                                        ahmed@example.com
                                    </p>
                                </div>

                            </div>

                        </td>

                        <td class="px-5 py-4 text-sm text-slate-600">
                            TechCorp
                        </td>

                        <td class="px-5 py-4">

                            <span
                                class="inline-flex rounded-full bg-blue-50 px-2.5 py-1 text-xs font-medium text-blue-700">
                                Contacted
                            </span>

                        </td>

                        <td class="px-5 py-4 text-sm text-slate-600">
                            Hassan
                        </td>

                    </tr>


                    <tr class="hover:bg-slate-50">

                        <td class="px-5 py-4">

                            <div class="flex items-center gap-3">

                                <div
                                    class="flex h-9 w-9 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-700">
                                    SA
                                </div>

                                <div>
                                    <p class="text-sm font-semibold text-slate-800">
                                        Sara Ahmed
                                    </p>

                                    <p class="text-xs text-slate-500">
                                        sara@example.com
                                    </p>
                                </div>

                            </div>

                        </td>

                        <td class="px-5 py-4 text-sm text-slate-600">
                            Nova Solutions
                        </td>

                        <td class="px-5 py-4">

                            <span
                                class="inline-flex rounded-full bg-amber-50 px-2.5 py-1 text-xs font-medium text-amber-700">
                                New
                            </span>

                        </td>

                        <td class="px-5 py-4 text-sm text-slate-600">
                            Ahmed Ali
                        </td>

                    </tr>


                    <tr class="hover:bg-slate-50">

                        <td class="px-5 py-4">

                            <div class="flex items-center gap-3">

                                <div
                                    class="flex h-9 w-9 items-center justify-center rounded-full bg-violet-100 text-xs font-bold text-violet-700">
                                    MA
                                </div>

                                <div>
                                    <p class="text-sm font-semibold text-slate-800">
                                        Mohamed Ali
                                    </p>

                                    <p class="text-xs text-slate-500">
                                        mohamed@example.com
                                    </p>
                                </div>

                            </div>

                        </td>

                        <td class="px-5 py-4 text-sm text-slate-600">
                            Digital Hub
                        </td>

                        <td class="px-5 py-4">

                            <span
                                class="inline-flex rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-medium text-emerald-700">
                                Qualified
                            </span>

                        </td>

                        <td class="px-5 py-4 text-sm text-slate-600">
                            Hassan
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>


    {{-- Tasks --}}

    <div class="rounded-xl border border-slate-200 bg-white shadow-sm">

        <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">

            <div>
                <h2 class="text-sm font-semibold text-slate-900">
                    My Tasks
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    Tasks that need your attention.
                </p>
            </div>

            <a href="{{ route('tasks.index') }}" wire:navigate
                class="text-xs font-semibold text-indigo-600 hover:text-indigo-700">
                View All
            </a>

        </div>


        <div class="p-5">

            <div class="space-y-3">

                <label class="flex cursor-pointer items-start gap-3">

                    <input type="checkbox" class="mt-0.5 h-4 w-4 rounded border-slate-300 text-indigo-600
                                   focus:ring-indigo-500">

                    <span class="min-w-0">

                        <span class="block text-sm font-medium text-slate-700">
                            Follow up with Ahmed
                        </span>

                        <span class="mt-1 block text-xs text-rose-500">
                            Due today
                        </span>

                    </span>

                </label>


                <label class="flex cursor-pointer items-start gap-3">

                    <input type="checkbox" class="mt-0.5 h-4 w-4 rounded border-slate-300 text-indigo-600
                                   focus:ring-indigo-500">

                    <span class="min-w-0">

                        <span class="block text-sm font-medium text-slate-700">
                            Send proposal to TechCorp
                        </span>

                        <span class="mt-1 block text-xs text-slate-500">
                            Due tomorrow
                        </span>

                    </span>

                </label>


                <label class="flex cursor-pointer items-start gap-3">

                    <input type="checkbox" class="mt-0.5 h-4 w-4 rounded border-slate-300 text-indigo-600
                                   focus:ring-indigo-500">

                    <span class="min-w-0">

                        <span class="block text-sm font-medium text-slate-700">
                            Review new leads
                        </span>

                        <span class="mt-1 block text-xs text-slate-500">
                            Due Aug 20
                        </span>

                    </span>

                </label>


                <label class="flex cursor-pointer items-start gap-3">

                    <input type="checkbox" checked class="mt-0.5 h-4 w-4 rounded border-slate-300 text-indigo-600
                                   focus:ring-indigo-500">

                    <span class="min-w-0">

                        <span class="block text-sm font-medium text-slate-400 line-through">
                            Update CRM records
                        </span>

                        <span class="mt-1 block text-xs text-slate-400">
                            Completed
                        </span>

                    </span>

                </label>

            </div>

        </div>

    </div>

</div>