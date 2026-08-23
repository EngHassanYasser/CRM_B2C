<div class="overflow-x-auto">
    <table class="min-w-full divide-y
                          divide-slate-200">
        <thead class="bg-slate-50">

            <tr>

                <th
                    class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Activity
                </th>

                <th
                    class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Related To
                </th>

                <th
                    class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    User
                </th>

                <th
                    class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Date
                </th>

                <th
                    class="px-4 py-3 text-left
                                   text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500">
                    Status
                </th>

                <th class="px-4 py-3"></th>

            </tr>

        </thead>
        <tbody class="divide-y divide-slate-100">
            @foreach ($activities as $activity)
                <tr class="transition hover:bg-slate-50">

                    {{-- Activity --}}
                    <td class="px-4 py-4">
                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg
                        bg-blue-50 text-blue-600">
                                {{-- Call icon --}}
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a2 2 0 011.94 1.515l.58 2.32a2 2 0 01-.45 1.91l-1.27 1.27a16 16 0 006.36 6.36l1.27-1.27a2 2 0 011.91-.45l2.32.58A2 2 0 0121 17.72V21a2 2 0 01-2 2h-1C9.716 23 1 14.284 1 3V2a2 2 0 012-2z" />
                                </svg>
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-slate-900">
                                    {{ $activity->subject }}
                                </p>

                                <p class="text-xs text-slate-500">
                                    {{ $activity->description }}
                                </p>
                            </div>

                        </div>
                    </td>


                    {{-- Related To --}}
                    <td class="px-4 py-4">
                        <p class="text-sm font-medium text-slate-700">
                            {{ $activity->activityable?->name }}
                        </p>

                        <p class="text-xs text-slate-500">
                            {{ class_basename($activity->activityable_type) }}
                        </p>
                    </td>


                    {{-- User --}}
                    <td class="px-4 py-4">
                        <div class="flex items-center gap-2">

                            <div
                                class="flex h-7 w-7 items-center justify-center rounded-full
                        bg-indigo-100 text-[10px] font-bold text-indigo-700">
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
                            {{ \Carbon\Carbon::parse($activity->occurred_at)->isToday()
                                ? 'Today'
                                : \Carbon\Carbon::parse($activity->occurred_at)->format('M d, Y') }}
                        </p>

                        <p class="text-xs text-slate-500">
                            {{ \Carbon\Carbon::parse($activity->occurred_at)->format('h:i A') }}
                        </p>

                    </td>


                    {{-- Status --}}
                    <td class="px-4 py-4">
                        <span @class([
                            'inline-flex rounded-full px-2.5 py-1 text-xs font-medium',
                            'bg-emerald-50 text-emerald-700' => $activity->status === 'completed',
                            'bg-yellow-50 text-yellow-700' => $activity->status === 'planned',
                            'bg-red-50 text-red-700' => $activity->status === 'cancelled',
                        ])>
                            {{ ucfirst($activity->status) }}
                        </span>
                    </td>


                    {{-- Actions --}}
                    <td class="px-4 py-4 text-right">
                        <button type="button" class="rounded-lg p-2 text-slate-400 hover:bg-slate-100">
                            •••
                        </button>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
<x-activities.table.pagination :$activities/>
</div>
