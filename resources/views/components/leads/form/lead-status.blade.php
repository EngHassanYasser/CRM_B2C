<div x-data="{
    open: false,
    selectedStatus: $wire.entangle('leadStatusId'),
    statuses: @js($statuses),
}" class="relative" @click.outside="open = false">
    <label class="mb-1.5 block text-sm font-medium text-slate-700">
        Lead Status
    </label>

    <button :disabled="mode == 'view' " type="button" @click="open = !open" 
         class="flex h-10 w-full items-center justify-between rounded-lg border border-slate-200 bg-white px-3 text-left text-sm outline-none transition
               focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100
               disabled:cursor-not-allowed
               disabled:bg-slate-100
               disabled:text-slate-400
               disabled:border-slate-200">
        <span
            x-text="
                statuses.find(
                    status => String(status.id) === String(selectedStatus)
                )?.name ?? 'Select status'
            "
            :class="selectedStatus ? 'text-slate-700' : 'text-slate-400'"></span>

        <svg class="h-4 w-4 text-slate-400 transition-transform" :class="{ 'rotate-180': open }" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
        </svg>
    </button>

    <div x-show="open" x-cloak x-transition :disabled="mode == 'view' "
        class="absolute left-0 right-0 top-full z-50 mt-1 max-h-56 overflow-y-auto rounded-lg border border-slate-200 bg-white shadow-lg">
        <button type="button" @click="selectedStatus = null; open = false"
            class="flex w-full items-center px-3 py-2 text-left text-sm hover:bg-slate-50"
            :class="!selectedStatus
                ?
                'bg-slate-50 text-indigo-600' :
                'text-slate-700'">
            Select status
        </button>

        @foreach ($statuses as $status)
            <button  type="button" @click="selectedStatus = {{ $status->id }}; open = false"
                class="flex w-full items-center px-3 py-2 text-left text-sm hover:bg-slate-50"
                :class="String(selectedStatus) === String({{ $status->id }}) ?
                    'bg-indigo-50 text-indigo-600' :
                    'text-slate-700'">
                {{ $status->name }}
            </button>
        @endforeach
    </div>

    @error('leadStatusId')
        <span class="mt-1 block text-xs text-red-500">
            {{ $message }}
        </span>
    @enderror
</div>
