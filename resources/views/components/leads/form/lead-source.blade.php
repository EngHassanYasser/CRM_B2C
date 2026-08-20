<div
    x-data="{
        open: false,
        selectedSource: $wire.entangle('leadSourceId'),
        sources: @js($sources),
    }"
    class="relative"
    @click.outside="open = false"
>
    <label class="mb-1.5 block text-sm font-medium text-slate-700">
        Lead Source
    </label>

    {{-- Selected source button --}}
    <button
        type="button"
        :disabled="mode == 'view' "
        @click="open = !open"
        class="flex h-10 w-full items-center justify-between rounded-lg border border-slate-200 bg-white px-3 text-left text-sm outline-none transition
               focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100
               disabled:cursor-not-allowed
               disabled:bg-slate-100
               disabled:text-slate-400
               disabled:border-slate-200"
    >
        <span
            x-text="
                sources.find(
                    source => String(source.id) === String(selectedSource)
                )?.name ?? 'Select source'
            "
            :class="selectedSource
                ? 'text-slate-700'
                : 'text-slate-400'"
        ></span>

        <svg
            class="h-4 w-4 text-slate-400 transition-transform"
            :class="{ 'rotate-180': open }"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m19 9-7 7-7-7"
            />
        </svg>
    </button>

    {{-- Dropdown --}}
    <div
        x-show="open"
        x-cloak
        x-transition
        class="absolute left-0 right-0 top-full z-50 mt-1 max-h-56 overflow-y-auto rounded-lg border border-slate-200 bg-white shadow-lg"
    >
        {{-- Clear selection --}}
        <button
            type="button"
            @click="selectedSource = ''; open = false"
            class="flex w-full items-center px-3 py-2 text-left text-sm hover:bg-slate-50"
            :class="!selectedSource
                ? 'bg-slate-50 text-indigo-600'
                : 'text-slate-700'
                  disabled:cursor-not-allowed
               disabled:bg-slate-100
               disabled:text-slate-400
               disabled:border-slate-200"
                
        >
            Select source
        </button>

        {{-- Sources --}}
        @foreach ($sources as $source)
            <button
                type="button"
                @click="selectedSource = {{ $source->id }}; open = false"
                class="flex w-full items-center px-3 py-2 text-left text-sm
                       hover:bg-slate-50
                       disabled:cursor-not-allowed
                       disabled:bg-slate-100
                       disabled:text-slate-400
                       disabled:border-slate-200"
                :class="String(selectedSource) === String({{ $source->id }})
                    ? 'bg-indigo-50 text-indigo-600'
                    : 'text-slate-700'"
            >
                {{ $source->name }}
            </button>
        @endforeach
    </div>

    @error('leadSourceId')
        <span class="mt-1 block text-xs text-red-500">
            {{ $message }}
        </span>
    @enderror
</div>