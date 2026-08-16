<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
{{-- Settings Navigation --}}
<aside class="lg:col-span-3">

    <div class="rounded-xl border border-slate-200 bg-white p-2 shadow-sm">

        <button type="button" class="flex w-full items-center gap-3 rounded-lg
                           bg-indigo-50 px-3 py-2.5 text-left
                           text-sm font-semibold text-indigo-700">

            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 15.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z" />

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19.4 15a1.7 1.7 0 00.34 1.88l.06.06-1.8 1.8-.06-.06a1.7 1.7 0 00-1.88-.34 1.7 1.7 0 00-1.03 1.56V20h-2.55v-.1a1.7 1.7 0 00-1.03-1.56 1.7 1.7 0 00-1.88.34l-.06.06-1.8-1.8.06-.06A1.7 1.7 0 007.6 15a1.7 1.7 0 00-1.56-1.03H6v-2.55h.04A1.7 1.7 0 007.6 10.4a1.7 1.7 0 00-.34-1.88L7.2 8.46l1.8-1.8.06.06a1.7 1.7 0 001.88.34 1.7 1.7 0 001.03-1.56V5h2.55v.1a1.7 1.7 0 001.03 1.56 1.7 1.7 0 001.88-.34l.06-.06 1.8 1.8-.06.06A1.7 1.7 0 0019.4 10.4a1.7 1.7 0 001.56 1.03H21v2.55h-.04A1.7 1.7 0 0019.4 15z" />
            </svg>

            General

        </button>


        <button type="button" class="mt-1 flex w-full items-center gap-3 rounded-lg
                           px-3 py-2.5 text-left text-sm font-medium
                           text-slate-600 transition hover:bg-slate-50
                           hover:text-slate-900">

            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2m6-8a4 4 0 100-8 4 4 0 000 8zm8-3a4 4 0 100-8 4 4 0 000 8zm-1 5h2a4 4 0 014 4v2" />
            </svg>

            Profile

        </button>


        <button type="button" class="mt-1 flex w-full items-center gap-3 rounded-lg
                           px-3 py-2.5 text-left text-sm font-medium
                           text-slate-600 transition hover:bg-slate-50
                           hover:text-slate-900">

            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h6l5 5v11a2 2 0 01-2 2z" />
            </svg>

            Lead Settings

        </button>


        <button type="button" class="mt-1 flex w-full items-center gap-3 rounded-lg
                           px-3 py-2.5 text-left text-sm font-medium
                           text-slate-600 transition hover:bg-slate-50
                           hover:text-slate-900">

            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            Pipeline Settings

        </button>


        <button type="button" class="mt-1 flex w-full items-center gap-3 rounded-lg
                           px-3 py-2.5 text-left text-sm font-medium
                           text-slate-600 transition hover:bg-slate-50
                           hover:text-slate-900">

            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.4-1.4A2 2 0 0118 14.2V11a6 6 0 00-12 0v3.2a2 2 0 01-.6 1.4L4 17h5m6 0a3 3 0 01-6 0" />
            </svg>

            Notifications

        </button>


        <button type="button" class="mt-1 flex w-full items-center gap-3 rounded-lg
                           px-3 py-2.5 text-left text-sm font-medium
                           text-slate-600 transition hover:bg-slate-50
                           hover:text-slate-900">

            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            Activity

        </button>


        <button type="button" class="mt-1 flex w-full items-center gap-3 rounded-lg
                           px-3 py-2.5 text-left text-sm font-medium
                           text-slate-600 transition hover:bg-slate-50
                           hover:text-slate-900">

            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 15.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z" />

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19.4 15a1.7 1.7 0 00.34 1.88l.06.06-1.8 1.8-.06-.06a1.7 1.7 0 00-1.88-.34 1.7 1.7 0 00-1.03 1.56V20h-2.55v-.1a1.7 1.7 0 00-1.03-1.56 1.7 1.7 0 00-1.88.34l-.06.06-1.8-1.8.06-.06A1.7 1.7 0 007.6 15a1.7 1.7 0 00-1.56-1.03H6v-2.55h.04A1.7 1.7 0 007.6 10.4a1.7 1.7 0 00-.34-1.88L7.2 8.46l1.8-1.8.06.06a1.7 1.7 0 001.88.34 1.7 1.7 0 001.03-1.56V5h2.55v.1a1.7 1.7 0 001.03 1.56 1.7 1.7 0 001.88-.34l.06-.06 1.8 1.8-.06.06A1.7 1.7 0 0019.4 10.4a1.7 1.7 0 001.56 1.03H21v2.55h-.04A1.7 1.7 0 0019.4 15z" />
            </svg>

            Security

        </button>

    </div>

</aside>