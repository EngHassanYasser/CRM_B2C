{{-- Toolbar --}}

<div class="border-b border-slate-200 p-4 sm:p-5">

    <div
        class="flex flex-col gap-4
                       xl:flex-row xl:items-center
                       xl:justify-between">

        {{-- Search --}}

        <div class="relative w-full xl:max-w-sm">

            <svg class="absolute left-3 top-1/2
                               h-4 w-4 -translate-y-1/2
                               text-slate-400"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-4.35-4.35m2.35-5.65a8 8 0 1 1-16 0 8 8 0 0 1 16 0z" />
            </svg>


            <input type="search" wire:model.live.debounce.300ms="search" placeholder="Search activities..."
                class="h-10 w-full rounded-lg
                               border border-slate-200
                               pl-10 pr-4 text-sm
                               outline-none transition
                               focus:border-indigo-400
                               focus:ring-2
                               focus:ring-indigo-100">

        </div>


        {{-- Filters --}}

        <div class="flex flex-wrap items-center gap-2">

            <button type="button" @click="filterOpen = !filterOpen"
                class="inline-flex h-10 items-center
                               gap-2 rounded-lg border
                               border-slate-200 bg-white
                               px-3 text-sm font-medium
                               text-slate-600
                               hover:bg-slate-50">

                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h18M6 12h12M10 20h4" />
                </svg>

                Filters

            </button>

            <select wire:model.live="type"
                class="h-10 rounded-lg border border-slate-200
           bg-white px-3 text-sm text-slate-600 outline-none">
                <option value="">
                    All Types
                </option>

                @foreach ($activityTypes as $activityType)
                    <option value="{{ $activityType->value }}">
                        {{ str($activityType->value)->headline() }}
                    </option>
                @endforeach
            </select>

            <select wire:model.live.number="userId">
                <option value="">All Users</option>

                @foreach ($users as $user)
                    <option value="{{ $user->id }}">
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>

        </div>

    </div>


    {{-- Advanced Filters --}}

    <div x-show="filterOpen" x-cloak x-transition class="mt-4 border-t
                       border-slate-200 pt-4">

        <div class="grid grid-cols-1
                           gap-4 md:grid-cols-3">

            <div>

                <label class="mb-1.5 block text-xs
                                   font-medium text-slate-600">
                    From
                </label>

                <input type="date" wire:model.live="from"
                    class="h-10 w-full rounded-lg
                                   border border-slate-200
                                   px-3 text-sm outline-none">

            </div>


            <div>

                <label class="mb-1.5 block text-xs
                                   font-medium text-slate-600">
                    To
                </label>

                <input type="date" wire:model.live="to"
                    class="h-10 w-full rounded-lg
                                   border border-slate-200
                                   px-3 text-sm outline-none">

            </div>


            <div>

                <label class="mb-1.5 block text-xs
                                   font-medium text-slate-600">
                    Related To
                </label>

                <select
                    class="h-10 w-full rounded-lg
                                   border border-slate-200
                                   bg-white px-3
                                   text-sm outline-none">

                    <option>
                        All Records
                    </option>

                    <option>
                        Leads
                    </option>

                    <option>
                        Deals
                    </option>

                </select>

            </div>

        </div>

    </div>

</div>
