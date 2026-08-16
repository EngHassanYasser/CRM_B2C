<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
{{-- Notifications --}}
<div class="mt-6 rounded-xl border border-slate-200 bg-white shadow-sm">

    <div class="border-b border-slate-200 px-6 py-5">

        <h2 class="text-base font-semibold text-slate-900">
            Notifications
        </h2>

        <p class="mt-1 text-sm text-slate-500">
            Choose which notifications you want to receive.
        </p>

    </div>


    <div class="divide-y divide-slate-100">

        {{-- Notification --}}
        <div class="flex items-center justify-between gap-4 px-6 py-5">

            <div>

                <p class="text-sm font-medium text-slate-900">
                    New Lead Assigned
                </p>

                <p class="mt-1 text-xs text-slate-500">
                    Notify users when a lead is assigned to them.
                </p>

            </div>

            <input type="checkbox" checked class="h-4 w-4 rounded border-slate-300
                                   text-indigo-600 focus:ring-indigo-500">

        </div>


        <div class="flex items-center justify-between gap-4 px-6 py-5">

            <div>

                <p class="text-sm font-medium text-slate-900">
                    Task Due Reminder
                </p>

                <p class="mt-1 text-xs text-slate-500">
                    Send reminders when tasks are approaching their due date.
                </p>

            </div>

            <input type="checkbox" checked class="h-4 w-4 rounded border-slate-300
                                   text-indigo-600 focus:ring-indigo-500">

        </div>


        <div class="flex items-center justify-between gap-4 px-6 py-5">

            <div>

                <p class="text-sm font-medium text-slate-900">
                    Deal Stage Changed
                </p>

                <p class="mt-1 text-xs text-slate-500">
                    Notify users when a deal moves to another stage.
                </p>

            </div>

            <input type="checkbox" class="h-4 w-4 rounded border-slate-300
                                   text-indigo-600 focus:ring-indigo-500">

        </div>


        <div class="flex items-center justify-between gap-4 px-6 py-5">



            <div>

                <p class="text-sm font-medium text-slate-900">
                    Daily Summary
                </p>

                <p class="mt-1 text-xs text-slate-500">
                    Receive a daily summary of CRM activities.
                </p>

            </div>

            <input type="checkbox" checked class="h-4 w-4 rounded border-slate-300
                                   text-indigo-600 focus:ring-indigo-500">

        </div>

    </div>

</div>