{{-- =====================================================
STATISTICS
====================================================== --}}

<div class="mb-6 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">


    {{-- Total Activities --}}

    <div class="rounded-xl border border-slate-200
                   bg-white p-5 shadow-sm">

        <p class="text-sm font-medium text-slate-500">
            Total Activities
        </p>

        <p class="mt-2 text-2xl font-bold text-slate-900">
            {{ $stats['total'] }}
        </p>

        <p class="mt-2 text-xs text-emerald-600">
            +18.4% from last month
        </p>

    </div>


    {{-- Calls --}}

    <div class="rounded-xl border border-slate-200
                   bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>

                <p class="text-sm font-medium text-slate-500">
                    Calls
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                   {{ $stats['calls'] }}
                </p>

            </div>

            <div
                class="flex h-10 w-10 items-center
                           justify-center rounded-lg
                           bg-blue-50 text-blue-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a2 2 0 011.94 1.515l.58 2.32a2 2 0 01-.45 1.91l-1.27 1.27a16 16 0 006.36 6.36l1.27-1.27a2 2 0 011.91-.45l2.32.58A2 2 0 0121 17.72V21a2 2 0 01-2 2h-1C9.716 23 1 14.284 1 3V2a2 2 0 012-2z" />
                </svg>

            </div>

        </div>

    </div>


    {{-- Meetings --}}

    <div class="rounded-xl border border-slate-200
                   bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>

                <p class="text-sm font-medium text-slate-500">
                    Meetings
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                  {{ $stats['meetings'] }}
                </p>

            </div>

            <div
                class="flex h-10 w-10 items-center
                           justify-center rounded-lg
                           bg-violet-50 text-violet-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>

            </div>

        </div>

    </div>


    {{-- Emails --}}

    <div class="rounded-xl border border-slate-200
                   bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>

                <p class="text-sm font-medium text-slate-500">
                    Emails
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                 {{ $stats['emails'] }}
                </p>

            </div>

            <div
                class="flex h-10 w-10 items-center
                           justify-center rounded-lg
                           bg-emerald-50 text-emerald-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>

            </div>

        </div>

    </div>

</div>
