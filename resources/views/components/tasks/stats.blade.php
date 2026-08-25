<div class="mb-6 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">


    {{-- Total Tasks --}}

    <div class="rounded-xl border border-slate-200
                   bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>

                <p class="text-sm font-medium text-slate-500">
                    Total Tasks
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                  {{ $stats['total'] }}
                </p>

                <p class="mt-2 text-xs text-slate-500">
                    All assigned tasks
                </p>

            </div>


            <div
                class="flex h-10 w-10 items-center
                           justify-center rounded-lg
                           bg-indigo-50 text-indigo-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5h6M9 9h6M9 13h6M9 17h3M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z" />
                </svg>

            </div>

        </div>

    </div>


    {{-- Pending --}}

    <div class="rounded-xl border border-slate-200
                   bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>

                <p class="text-sm font-medium text-slate-500">
                    Pending
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                   {{ $stats['pending'] }}
                </p>

                <p class="mt-2 text-xs text-amber-600">
                    Tasks waiting to be completed
                </p>

            </div>


            <div
                class="flex h-10 w-10 items-center
                           justify-center rounded-lg
                           bg-amber-50 text-amber-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </div>

        </div>

    </div>


    {{-- Due Today --}}

    <div class="rounded-xl border border-slate-200
                   bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>

                <p class="text-sm font-medium text-slate-500">
                    Due Today
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                 {{ $stats['today'] }}
                </p>

                <p class="mt-2 text-xs text-rose-600">
                    Requires your attention
                </p>

            </div>


            <div
                class="flex h-10 w-10 items-center
                           justify-center rounded-lg
                           bg-rose-50 text-rose-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4m0 4h.01M5.07 19h13.86a2 2 0 001.73-3L13.73 4a2 2 0 00-3.46 0L3.34 16a2 2 0 001.73 3z" />
                </svg>

            </div>

        </div>

    </div>


    {{-- Completed --}}

    <div class="rounded-xl border border-slate-200
                   bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>

                <p class="text-sm font-medium text-slate-500">
                    Completed
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                   {{ $stats['completed'] }}
                </p>

                <p class="mt-2 text-xs text-emerald-600">
                    52.3% completion rate
                </p>

            </div>


            <div
                class="flex h-10 w-10 items-center
                           justify-center rounded-lg
                           bg-emerald-50 text-emerald-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>

            </div>

        </div>

    </div>

</div>
