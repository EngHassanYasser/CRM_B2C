<div x-show="model" x-cloak x-transition.opacity
    class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/50 p-4 backdrop-blur-sm">
    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95 translate-y-2"
        x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
        x-transition:leave-end="opacity-0 scale-95 translate-y-2" @click.outside="open = false"
        @keydown.escape.window="open = false"
        class="w-full max-w-2xl overflow-hidden rounded-2xl bg-white shadow-2xl ring-1 ring-black/5">

        {{-- Header --}}
        <div class="flex items-center justify-between border-b border-slate-200 px-6 py-4">

            <div>
                <h2 class="text-lg font-semibold text-slate-900">
                    Edit Activity
                </h2>

                <p class="mt-0.5 text-sm text-slate-500">
                    Update the activity information below.
                </p>
            </div>

            <button type="button" @click="model = false"
                class="inline-flex h-9 w-9 items-center justify-center rounded-lg
                       text-slate-400 transition
                       hover:bg-slate-100 hover:text-slate-600
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                    stroke="currentColor" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>


        {{-- Body --}}
        <form wire:submit="update" class="max-h-[calc(100vh-10rem)] overflow-y-auto">

            <div class="space-y-5 px-6 py-6">

                {{-- Type --}}
                <div>
                    <label for="activity-type" class="mb-1.5 block text-sm font-medium text-slate-700">
                        Type
                    </label>

                    <select id="activity-type" wire:model="type"
                        class="block w-full rounded-lg border-slate-300 bg-white
           px-3 py-2.5 text-sm text-slate-700
           shadow-sm transition
           focus:border-indigo-500 focus:ring-indigo-500">
                        @foreach (\App\Enums\EnActivityType::cases() as $activityType)
                            <option value="{{ $activityType->value }}">
                                {{ $activityType->label() }}
                            </option>
                        @endforeach
                    </select>

                    @error('type')
                        <p class="mt-1.5 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                    @error('type')
                        <p class="mt-1.5 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Subject --}}
                <div>
                    <label for="activity-subject" class="mb-1.5 block text-sm font-medium text-slate-700">
                        Subject
                    </label>

                    <input id="activity-subject" type="text" wire:model="subject"
                        placeholder="e.g. Follow up with client"
                        class="block w-full rounded-lg border-slate-300
                               px-3 py-2.5 text-sm text-slate-700
                               placeholder:text-slate-400 shadow-sm transition
                               focus:border-indigo-500 focus:ring-indigo-500">

                    @error('subject')
                        <p class="mt-1.5 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Description --}}
                <div>
                    <label for="activity-description" class="mb-1.5 block text-sm font-medium text-slate-700">
                        Description
                    </label>

                    <textarea id="activity-description" wire:model="description" rows="4"
                        placeholder="Add details about this activity..."
                        class="block w-full resize-none rounded-lg border-slate-300
                               px-3 py-2.5 text-sm text-slate-700
                               placeholder:text-slate-400 shadow-sm transition
                               focus:border-indigo-500 focus:ring-indigo-500"></textarea>

                    @error('description')
                        <p class="mt-1.5 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Occurred At --}}
                <div>
                    <label for="activity-occurred-at" class="mb-1.5 block text-sm font-medium text-slate-700">
                        Occurred At
                    </label>
                <input
                    id="activity-occurred-at"
                    type="datetime-local"
                    wire:model="occurredAt"
                    step="60"
                    class="block w-full rounded-lg border-slate-300
                        px-3 py-2.5 text-sm text-slate-700
                        shadow-sm transition
                        focus:border-indigo-500 focus:ring-indigo-500">

                    @error('occurredAt')
                        <p class="mt-1.5 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <select id="activity-status" wire:model="status"
                    class="block w-full rounded-lg border-slate-300 bg-white
           px-3 py-2.5 text-sm text-slate-700 shadow-sm transition
           focus:border-indigo-500 focus:ring-indigo-500">
                    @foreach (\App\Enums\EnActivityStatus::cases() as $activityStatus)
                        <option value="{{ $activityStatus->value }}">
                            {{ $activityStatus->label() }}
                        </option>
                    @endforeach
                </select>

            </div>


            {{-- Footer --}}
            <div
                class="flex items-center justify-end gap-3 border-t
                       border-slate-200 bg-slate-50 px-6 py-4">

                <button type="button" @click="model = false"
                    class="rounded-lg border border-slate-300 bg-white
                           px-4 py-2.5 text-sm font-medium text-slate-700
                           shadow-sm transition
                           hover:bg-slate-50
                           focus:outline-none focus:ring-2
                           focus:ring-indigo-500 focus:ring-offset-2">
                    Cancel
                </button>

                <button type="submit" wire:loading.attr="disabled" wire:target="update"
                    class="inline-flex min-w-[120px] items-center justify-center
                           rounded-lg bg-indigo-600 px-5 py-2.5
                           text-sm font-medium text-white shadow-sm
                           transition
                           hover:bg-indigo-700
                           focus:outline-none focus:ring-2
                           focus:ring-indigo-500 focus:ring-offset-2
                           disabled:cursor-not-allowed disabled:opacity-60">

                    {{-- Normal --}}
                    <span wire:loading.remove wire:target="update">
                        Save Changes
                    </span>

                    {{-- Loading --}}
                    <span wire:loading wire:target="update" class="inline-flex items-center gap-2">
                        <svg class="h-4 w-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>

                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                        </svg>

                        Saving...
                    </span>

                </button>

            </div>

        </form>
    </div>
</div>
