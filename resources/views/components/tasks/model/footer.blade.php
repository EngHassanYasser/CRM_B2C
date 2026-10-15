<div class="flex items-center justify-between border-t border-slate-200 bg-slate-50/80 px-6 py-4">

    <p class="hidden text-xs text-slate-400 sm:block">
        <span class="text-red-500">*</span>
        Required fields
    </p>

    <div class="ml-auto flex items-center gap-3">

        {{-- Cancel --}}
        <button type="button" @click='taskModel=false'
            class="rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-medium text-slate-700 shadow-sm transition hover:bg-slate-50 hover:text-slate-900 focus:outline-none focus:ring-4 focus:ring-slate-500/10">
            Cancel
        </button>


        {{-- Save --}}
        <button type="button" wire:click='addTask' wire:loading.attr="disabled"
            class="inline-flex min-w-[125px] items-center justify-center gap-2 rounded-xl bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-500/20 disabled:cursor-not-allowed disabled:opacity-60">

            {{-- Normal --}}
            <span wire:loading.remove
                x-text="taskMode === 'create'
                    ? 'Create Task'
                    : 'Update Task'"></span>

            {{-- Loading --}}
            <span wire:loading class="inline-flex items-center gap-2">
                <svg class="h-4 w-4 animate-spin" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10"
                        stroke="currentColor" stroke-width="4"></circle>

                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                </svg>

                Saving...
            </span>

        </button>

    </div>

</div>
