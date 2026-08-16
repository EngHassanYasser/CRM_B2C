<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
{{-- Statistics --}}
<div class="mb-6 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

    {{-- Total Users --}}
    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>

                <p class="text-sm font-medium text-slate-500">
                    Total Users
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                    24
                </p>

                <p class="mt-2 text-xs text-slate-500">
                    All registered users
                </p>

            </div>

            <div class="flex h-10 w-10 items-center justify-center
                           rounded-lg bg-indigo-50 text-indigo-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2m6-8a4 4 0 100-8 4 4 0 000 8zm8-3a4 4 0 100-8 4 4 0 000 8zm-1 5h2a4 4 0 014 4v2" />
                </svg>

            </div>

        </div>

    </div>


    {{-- Active --}}
    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>

                <p class="text-sm font-medium text-slate-500">
                    Active Users
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                    21
                </p>

                <p class="mt-2 text-xs text-emerald-600">
                    Currently active
                </p>

            </div>

            <div class="flex h-10 w-10 items-center justify-center
                           rounded-lg bg-emerald-50 text-emerald-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>

            </div>

        </div>

    </div>


    {{-- Inactive --}}
    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>

                <p class="text-sm font-medium text-slate-500">
                    Inactive Users
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                    3
                </p>

                <p class="mt-2 text-xs text-slate-500">
                    Currently disabled
                </p>

            </div>

            <div class="flex h-10 w-10 items-center justify-center
                           rounded-lg bg-slate-100 text-slate-500">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                </svg>

            </div>

        </div>

    </div>


    {{-- Administrators --}}
    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>

                <p class="text-sm font-medium text-slate-500">
                    Administrators
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                    4
                </p>

                <p class="mt-2 text-xs text-slate-500">
                    Users with admin access
                </p>

            </div>

            <div class="flex h-10 w-10 items-center justify-center
                           rounded-lg bg-violet-50 text-violet-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15l-3 3m0 0l-3-3m3 3V9m9 6l3 3m0 0l3-3m-3 3V9" />
                </svg>

            </div>

        </div>

    </div>

</div>