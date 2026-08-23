<div class="mb-6">

    <!-- Back -->
    <a href="#" class="mb-5 inline-flex items-center gap-2 text-sm text-slate-500 hover:text-slate-800">
        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>

        Back to Leads
    </a>


    <!-- Lead Header -->
    <div class="flex flex-col gap-5 sm:flex-row sm:items-start sm:justify-between">

        <div class="flex items-start gap-4">

            <!-- Avatar -->
            <div
                class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-slate-900 text-lg font-semibold text-white">
                JD
            </div>

            <div>

                <h1 class="text-2xl font-semibold tracking-tight text-slate-900">
                   {{ $lead->first_name .  ' ' . $lead->last_name }}
                </h1>

                <div class="mt-2 flex flex-wrap items-center gap-x-3 gap-y-1 text-sm text-slate-500">

                    <span>
                        {{ $lead->email }}
                    </span>

                    <span class="hidden sm:block">
                        •
                    </span>

                    <span>
                        {{ $lead->phone }}
                    </span>

                </div>

                <div class="mt-3 flex flex-wrap gap-2">

                    <span class="rounded-full bg-green-50 px-3 py-1 text-xs font-medium text-green-700">
                       {{ $lead->lead_status->name }}
                    </span>

                    <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-medium text-blue-700">
                      {{ $lead->lead_source->name }}
                    </span>

                </div>

            </div>

        </div>


        <!-- Header Actions -->
        <div class="flex items-center gap-2">

            <button type="button"
                class="rounded-lg border border-slate-300 bg-white px-4 py-2 text-sm font-medium text-slate-700 shadow-sm transition hover:bg-slate-50">
                Edit
            </button>

            <button type="button" @click="activityModal = true"
                class="rounded-lg bg-slate-900 px-4 py-2 text-sm font-medium text-white shadow-sm transition hover:bg-slate-800">
                + Activity
            </button>

        </div>

    </div>

</div>
