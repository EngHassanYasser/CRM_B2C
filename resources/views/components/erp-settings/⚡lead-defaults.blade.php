<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
{{-- Lead Defaults --}}
<div class="mt-6 rounded-xl border border-slate-200 bg-white shadow-sm">

    <div class="border-b border-slate-200 px-6 py-5">

        <h2 class="text-base font-semibold text-slate-900">
            Lead Defaults
        </h2>

        <p class="mt-1 text-sm text-slate-500">
            Configure default values used when creating new leads.
        </p>

    </div>


    <div class="space-y-5 p-6">

        <div>

            <label class="mb-1.5 block text-sm font-medium text-slate-700">
                Default Lead Status
            </label>

            <select class="h-10 w-full rounded-lg border border-slate-200
                                   bg-white px-3 text-sm text-slate-700
                                   outline-none focus:border-indigo-500">

                <option>
                    New
                </option>

                <option>
                    Contacted
                </option>

                <option>
                    Qualified
                </option>

            </select>

        </div>


        <div>

            <label class="mb-1.5 block text-sm font-medium text-slate-700">
                Default Lead Source
            </label>

            <select class="h-10 w-full rounded-lg border border-slate-200
                                   bg-white px-3 text-sm text-slate-700
                                   outline-none focus:border-indigo-500">

                <option>
                    Website
                </option>

                <option>
                    Facebook
                </option>

                <option>
                    LinkedIn
                </option>

                <option>
                    Referral
                </option>

            </select>

        </div>

    </div>


    <div class="flex items-center justify-end border-t
                           border-slate-200 px-6 py-4">

        <button type="button" class="h-10 rounded-lg bg-indigo-600
                               px-5 text-sm font-semibold text-white
                               shadow-sm transition hover:bg-indigo-700">
            Save Defaults
        </button>

    </div>

</div>