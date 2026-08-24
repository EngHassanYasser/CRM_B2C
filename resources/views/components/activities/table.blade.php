<div
    x-data="{
        openMenu: null,
        confirmDelete: false,
    }"
    @keydown.escape.window="
        confirmDelete = false;
    "
    class="overflow-x-auto"
>

    <table class="min-w-full divide-y divide-slate-200">

        {{-- Header --}}
        <thead class="bg-slate-50">
            <tr>

                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                    Activity
                </th>

                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                    Related To
                </th>

                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                    User
                </th>

                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                    Date
                </th>

                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                    Status
                </th>

                <th class="w-16 px-4 py-3"></th>

            </tr>
        </thead>


        {{-- Body --}}
        <tbody class="divide-y divide-slate-100">

            @foreach ($activities as $activity)

                <tr
                    wire:key="activity-{{ $activity->id }}"
                    class="transition hover:bg-slate-50"
                >

                  {{-- Activity --}}
<td class="px-4 py-4">
    <div class="flex items-center gap-3">

        @switch($activity->type)

            {{-- Call --}}
            @case(\App\Enums\EnActivityType::CALL)
                <div
                    class="flex h-9 w-9 shrink-0 items-center justify-center
                           rounded-lg bg-blue-50 text-blue-600"
                >
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a2 2 0 011.94 1.515l.58 2.32a2 2 0 01-.45 1.91l-1.27 1.27a16 16 0 006.36 6.36l1.27-1.27a2 2 0 011.91-.45l2.32.58A2 2 0 0121 17.72V21a2 2 0 01-2 2h-1C9.716 23 1 14.284 1 3V2a2 2 0 012-2z"
                        />
                    </svg>
                </div>
            @break

            {{-- Email --}}
            @case(\App\Enums\EnActivityType::EMAIL)
                <div
                    class="flex h-9 w-9 shrink-0 items-center justify-center
                           rounded-lg bg-violet-50 text-violet-600"
                >
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 8l9 6 9-6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"
                        />
                    </svg>
                </div>
            @break

            {{-- Meeting --}}
            @case(\App\Enums\EnActivityType::MEETING)
                <div
                    class="flex h-9 w-9 shrink-0 items-center justify-center
                           rounded-lg bg-amber-50 text-amber-600"
                >
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V6a1 1 0 011-1z"
                        />
                    </svg>
                </div>
            @break

        @endswitch

        <div class="min-w-0">
            <p class="truncate text-sm font-semibold text-slate-900">
                {{ $activity->subject }}
            </p>

            @if ($activity->description)
                <p class="max-w-xs truncate text-xs text-slate-500">
                    {{ $activity->description }}
                </p>
            @endif
        </div>

    </div>
</td>


                    {{-- Related To --}}
                    <td class="px-4 py-4">

                        <p class="text-sm font-medium text-slate-700">
                            {{ $activity->activityable?->name ?? '—' }}
                        </p>

                        @if ($activity->activityable_type)
                            <p class="text-xs text-slate-500">
                                {{ class_basename($activity->activityable_type) }}
                            </p>
                        @endif

                    </td>


                    {{-- User --}}
                    <td class="px-4 py-4">

                        <div class="flex items-center gap-2">

                            <div
                                class="flex h-7 w-7 shrink-0 items-center justify-center
                                       rounded-full bg-indigo-100
                                       text-[10px] font-bold text-indigo-700"
                            >
                                {{ strtoupper(substr($activity->user->name, 0, 2)) }}
                            </div>

                            <span class="text-sm text-slate-600">
                                {{ $activity->user->name }}
                            </span>

                        </div>

                    </td>


                    {{-- Date --}}
                    <td class="px-4 py-4">

                        <p class="text-sm text-slate-700">
                            {{ $activity->occurred_at->isToday()
                                ? 'Today'
                                : $activity->occurred_at->format('M d, Y') }}
                        </p>

                        <p class="text-xs text-slate-500">
                            {{ $activity->occurred_at->format('h:i A') }}
                        </p>

                    </td>


                    {{-- Status --}}
                    <td class="px-4 py-4">

                        <span @class([
                            'inline-flex rounded-full px-2.5 py-1 text-xs font-medium',

                            'bg-emerald-50 text-emerald-700'
                                => $activity->status === 'completed',

                            'bg-yellow-50 text-yellow-700'
                                => $activity->status === 'planned',

                            'bg-red-50 text-red-700'
                                => $activity->status === 'cancelled',
                        ])>
                            {{ ucfirst($activity->status->value) }}
                        </span>

                    </td>


                    {{-- Actions --}}
                    <td class="px-4 py-4 text-right">

                        <div class="relative inline-block">

                            {{-- Menu Button --}}
                            <button
                                type="button"
                                @click="
                                    openMenu =
                                        openMenu === {{ $activity->id }}
                                            ? null
                                            : {{ $activity->id }}
                                "
                                class="inline-flex h-9 w-9 items-center justify-center
                                       rounded-lg text-slate-400 transition
                                       hover:bg-slate-100 hover:text-slate-600
                                       focus:outline-none focus:ring-2
                                       focus:ring-indigo-500"
                                aria-label="Activity actions"
                            >

                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 6.75a.75.75 0 100-1.5.75.75 0 000 1.5z
                                           M12 12.75a.75.75 0 100-1.5.75 0 000 1.5z
                                           M12 18.75a.75.75 0 100-1.5.75 0 000 1.5z"
                                    />
                                </svg>

                            </button>


                            {{-- Dropdown --}}
                            <div
                                x-show="openMenu === {{ $activity->id }}"
                                x-cloak
                                x-transition.origin.top.right
                                @click.outside="openMenu = null"
                                class="absolute right-0 z-30 mt-2 w-40
                                       overflow-hidden rounded-xl border
                                       border-slate-200 bg-white py-1
                                       shadow-lg"
                            >

                                {{-- Edit --}}
                                <button
                                    type="button"
                                    @click="model = true"
                                    wire:click="edit({{ $activity->id }})"
                                    class="flex w-full items-center gap-2
                                           px-4 py-2.5 text-left text-sm
                                           text-slate-700 transition
                                           hover:bg-slate-50"
                                >

                                    <svg
                                        class="h-4 w-4 text-slate-400"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z"
                                        />
                                    </svg>

                                    Edit

                                </button>


                                {{-- Delete --}}
                                <button
                                    type="button"
                                    @click="
                                        activityId = {{ $activity->id }};
                                        openMenu = null;
                                        confirmDelete = true;
                                    "
                                    class="flex w-full items-center gap-2
                                           px-4 py-2.5 text-left text-sm
                                           text-red-600 transition
                                           hover:bg-red-50"
                                >

                                    <svg
                                        class="h-4 w-4"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M6 7h12
                                               M10 11v6
                                               M14 11v6
                                               M9 7V4h6v3
                                               m-8 0l.75 13h8.5L17 7"
                                        />
                                    </svg>

                                    Delete

                                </button>

                            </div>

                        </div>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>


    {{-- Pagination --}}
    <x-activities.table.pagination :$activities />


    {{-- Delete Confirmation Modal --}}
    <div
        x-show="confirmDelete"
        x-cloak
        x-transition.opacity
        class="fixed inset-0 z-50 flex items-center justify-center
               bg-slate-900/50 p-4 backdrop-blur-sm"
    >

        <div
            x-show="confirmDelete"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95 translate-y-2"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-2"
            @click.outside="confirmDelete = false"
            class="w-full max-w-md overflow-hidden rounded-2xl
                   bg-white shadow-2xl"
        >

            {{-- Modal Body --}}
            <div class="p-6">

                <div class="flex items-start gap-4">

                    <div
                        class="flex h-11 w-11 shrink-0 items-center justify-center
                               rounded-full bg-red-50 text-red-600"
                    >
                        <svg
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 9v3.75m0 3.75h.008v.008H12v-.008z
                                   M10.29 3.86l-8.82 15a2 2 0 001.72 3h17.62
                                   a2 2 0 001.72-3l-8.82-15a2 2 0 00-3.44 0z"
                            />
                        </svg>
                    </div>

                    <div>

                        <h3 class="text-base font-semibold text-slate-900">
                            Delete activity?
                        </h3>

                        <p class="mt-1 text-sm leading-5 text-slate-500">
                            This activity will be removed from your activity history.
                        </p>

                    </div>

                </div>

            </div>


            {{-- Modal Footer --}}
            <div
                class="flex justify-end gap-3 border-t border-slate-200
                       bg-slate-50 px-6 py-4"
            >

                <button
                    type="button"
                    @click="confirmDelete = false"
                    class="rounded-lg border border-slate-300 bg-white
                           px-4 py-2.5 text-sm font-medium text-slate-700
                           shadow-sm transition
                           hover:bg-slate-50
                           focus:outline-none focus:ring-2
                           focus:ring-indigo-500 focus:ring-offset-2"
                >
                    Cancel
                </button>


                <button
                    type="button"
                    wire:click="deleteActivity(activityId)"
                    wire:loading.attr="disabled"
                    wire:target="deleteActivity"
                    @click="confirmDelete = false"
                    class="inline-flex min-w-[120px] items-center justify-center
                           rounded-lg bg-red-600 px-4 py-2.5
                           text-sm font-medium text-white shadow-sm
                           transition hover:bg-red-700
                           focus:outline-none focus:ring-2
                           focus:ring-red-500 focus:ring-offset-2
                           disabled:cursor-not-allowed disabled:opacity-60"
                >

                    <span wire:loading.remove wire:target="deleteActivity">
                        Delete Activity
                    </span>

                    <span
                        wire:loading
                        wire:target="deleteActivity"
                    >
                        Deleting...
                    </span>

                </button>

            </div>

        </div>

    </div>

</div>