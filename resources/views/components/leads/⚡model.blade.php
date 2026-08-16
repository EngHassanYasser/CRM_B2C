<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
<div x-show="model"  x-cloak class="fixed inset-0 z-50 flex items-center justify-center p-4">

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-slate-900/50"></div>

    {{-- Modal --}}
    <div class="relative w-full max-w-2xl rounded-xl bg-white shadow-xl">

        {{-- Header --}}
        <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">

            <div>
                <h2 class="text-base font-semibold text-slate-900">
                    Create Lead
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    Add a new lead.
                </p>
            </div>

            <button
                type="button"
                @click="model=false"
                class="rounded-lg p-2 text-slate-400 hover:bg-slate-100 hover:text-slate-600"
            >
                ✕
            </button>

        </div>

        {{-- Form --}}
        <form class="p-5">

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                <div>
                    <label class="mb-1.5 block text-sm font-medium text-slate-700">
                        First Name
                    </label>

                    <input
                        type="text"
                        placeholder="Ahmed"
                        class="h-10 w-full rounded-lg border border-slate-200 px-3 text-sm
                               outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                    >
                </div>

                <div>
                    <label class="mb-1.5 block text-sm font-medium text-slate-700">
                        Last Name
                    </label>

                    <input
                        type="text"
                        placeholder="Mohamed"
                        class="h-10 w-full rounded-lg border border-slate-200 px-3 text-sm
                               outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                    >
                </div>

                <div>
                    <label class="mb-1.5 block text-sm font-medium text-slate-700">
                        Email
                    </label>

                    <input
                        type="email"
                        placeholder="ahmed@example.com"
                        class="h-10 w-full rounded-lg border border-slate-200 px-3 text-sm
                               outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                    >
                </div>

                <div>
                    <label class="mb-1.5 block text-sm font-medium text-slate-700">
                        Phone
                    </label>

                    <input
                        type="tel"
                        placeholder="+20 100 000 0000"
                        class="h-10 w-full rounded-lg border border-slate-200 px-3 text-sm
                               outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                    >
                </div>

                <div>
                    <label class="mb-1.5 block text-sm font-medium text-slate-700">
                        Company
                    </label>

                    <input
                        type="text"
                        placeholder="Company name"
                        class="h-10 w-full rounded-lg border border-slate-200 px-3 text-sm
                               outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                    >
                </div>

                <div>
                    <label class="mb-1.5 block text-sm font-medium text-slate-700">
                        Lead Source
                    </label>

                    <select
                        class="h-10 w-full rounded-lg border border-slate-200 bg-white px-3 text-sm
                               outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                    >
                        <option value="">Select source</option>
                        <option>Website</option>
                        <option>Facebook</option>
                        <option>LinkedIn</option>
                        <option>Referral</option>
                    </select>
                </div>

            </div>

            {{-- Actions --}}
            <div class="mt-5 flex justify-end gap-2 border-t border-slate-100 pt-4">

                <button
                    type="button"
                    class="h-10 rounded-lg border border-slate-200 px-4 text-sm font-medium text-slate-700
                           hover:bg-slate-50"
                >
                    Cancel
                </button>

                <button
                    type="submit"
                    class="h-10 rounded-lg bg-indigo-600 px-4 text-sm font-semibold text-white
                           hover:bg-indigo-700"
                >
                    Create Lead
                </button>

            </div>

        </form>

    </div>

</div>