<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
{{-- General Settings --}}
<div class="rounded-xl border border-slate-200 bg-white shadow-sm">

    <div class="border-b border-slate-200 px-6 py-5">

        <h2 class="text-base font-semibold text-slate-900">
            General Settings
        </h2>

        <p class="mt-1 text-sm text-slate-500">
            Configure the basic information and behavior of your CRM.
        </p>

    </div>


    <div class="space-y-6 p-6">

        {{-- Company Name --}}
        <div>

            <label class="mb-1.5 block text-sm font-medium text-slate-700">
                Company Name
            </label>

            <input type="text" value="My Company" class="h-10 w-full rounded-lg border border-slate-200
                                   px-3 text-sm text-slate-900 outline-none
                                   transition focus:border-indigo-500
                                   focus:ring-2 focus:ring-indigo-100">

            <p class="mt-1.5 text-xs text-slate-500">
                This name will be displayed throughout the CRM.
            </p>

        </div>


        {{-- Company Email --}}
        <div>

            <label class="mb-1.5 block text-sm font-medium text-slate-700">
                Company Email
            </label>

            <input type="email" value="contact@example.com" class="h-10 w-full rounded-lg border border-slate-200
                                   px-3 text-sm text-slate-900 outline-none
                                   transition focus:border-indigo-500
                                   focus:ring-2 focus:ring-indigo-100">

        </div>


        {{-- Timezone --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

            <div>

                <label class="mb-1.5 block text-sm font-medium text-slate-700">
                    Timezone
                </label>

                <select class="h-10 w-full rounded-lg border border-slate-200
                                       bg-white px-3 text-sm text-slate-700
                                       outline-none focus:border-indigo-500
                                       focus:ring-2 focus:ring-indigo-100">

                    <option>
                        Africa/Cairo
                    </option>

                    <option>
                        Europe/London
                    </option>

                    <option>
                        Asia/Dubai
                    </option>

                    <option>
                        America/New_York
                    </option>

                </select>

            </div>


            <div>

                <label class="mb-1.5 block text-sm font-medium text-slate-700">
                    Date Format
                </label>

                <select class="h-10 w-full rounded-lg border border-slate-200
                                       bg-white px-3 text-sm text-slate-700
                                       outline-none focus:border-indigo-500
                                       focus:ring-2 focus:ring-indigo-100">

                    <option>
                        DD/MM/YYYY
                    </option>

                    <option>
                        MM/DD/YYYY
                    </option>

                    <option>
                        YYYY-MM-DD
                    </option>

                </select>

            </div>

        </div>


        {{-- Currency --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

            <div>

                <label class="mb-1.5 block text-sm font-medium text-slate-700">
                    Currency
                </label>

                <select class="h-10 w-full rounded-lg border border-slate-200
                                       bg-white px-3 text-sm text-slate-700
                                       outline-none focus:border-indigo-500
                                       focus:ring-2 focus:ring-indigo-100">

                    <option>
                        EGP - Egyptian Pound
                    </option>

                    <option>
                        USD - US Dollar
                    </option>

                    <option>
                        EUR - Euro
                    </option>

                    <option>
                        SAR - Saudi Riyal
                    </option>

                </select>

            </div>


            <div>

                <label class="mb-1.5 block text-sm font-medium text-slate-700">
                    Language
                </label>

                <select class="h-10 w-full rounded-lg border border-slate-200
                                       bg-white px-3 text-sm text-slate-700
                                       outline-none focus:border-indigo-500
                                       focus:ring-2 focus:ring-indigo-100">

                    <option>
                        English
                    </option>

                    <option>
                        Arabic
                    </option>

                </select>

            </div>

        </div>

    </div>


    {{-- Save --}}
    <div class="flex items-center justify-end border-t
                           border-slate-200 px-6 py-4">

        <button type="button" class="h-10 rounded-lg bg-indigo-600
                               px-5 text-sm font-semibold text-white
                               shadow-sm transition hover:bg-indigo-700">
            Save Changes
        </button>

    </div>

</div>