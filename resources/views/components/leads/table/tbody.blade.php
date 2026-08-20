<tbody class="divide-y divide-slate-100">

    @foreach ($leads as $lead)
        <tr class="transition hover:bg-slate-50">

            <td class="px-4 py-4">
                <div class="flex items-center gap-3">

                    <div
                        class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-indigo-100 text-xs font-bold text-indigo-700">
                        {{ strtoupper(substr($lead->first_name, 0, 1) . substr($lead->last_name, 0, 1)) }}
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-slate-900">
                            {{ $lead->first_name }} {{ $lead->last_name }}
                        </p>

                        <p class="text-xs text-slate-500">
                            {{ $lead->email }}
                        </p>
                    </div>

                </div>
            </td>

            <td class="px-4 py-4 text-sm text-slate-600">
                {{ $lead->lead_source?->name ?? '—' }}
            </td>

            <td class="px-4 py-4">
                <span class="inline-flex rounded-full bg-blue-50 px-2.5 py-1 text-xs font-medium text-blue-700">
                    {{ $lead->lead_status?->name ?? '—' }}
                </span>
            </td>

            <td class="px-4 py-4">
                <div class="flex items-center gap-2">

                    <div
                        class="flex h-7 w-7 items-center justify-center rounded-full bg-indigo-100 text-[10px] font-bold text-indigo-700">
                        {{ strtoupper(substr($lead->owner?->name ?? '', 0, 2)) }}
                    </div>

                    <span class="text-sm text-slate-600">
                        {{ $lead->owner?->name ?? '—' }}
                    </span>

                </div>
            </td>

            <td class="px-4 py-4 text-sm text-slate-500">
                {{ $lead->latestActivity?->created_at?->diffForHumans() ?? '—' }}
            </td>

            <td class="px-4 py-4 text-right">
                <div x-data="{ open: false }" class="relative inline-block text-left">
                    <button type="button" @click="open = !open" @click.outside="open = false"
                        class="rounded-lg p-2 text-slate-400 transition hover:bg-slate-100 hover:text-slate-600">
                        •••
                    </button>

                    <div x-show="open" x-transition
                        class="absolute right-0 z-50 mt-2 w-40 overflow-hidden rounded-lg border border-slate-200 bg-white py-1 text-right shadow-lg">

                        <button type="button" @click="mode='view';model=open"
                            wire:click="$dispatch('open-lead-modal', { lead: {{ $lead }} })"
                            class="block w-full px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                            عرض
                        </button>

                        <button type="button" @click="mode='edit';model=open"
                            wire:click="$dispatch('open-lead-modal', { lead: {{ $lead }} })"
                            class="block w-full px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                            تعديل
                        </button>

                        <button type="button" wire:click="deleteLead({{ $lead->id }})"
                            class="block w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                            حذف
                        </button>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach

</tbody>
