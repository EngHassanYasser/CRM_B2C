<div>
    <label
        for="task-due-at"
        class="mb-1.5 block text-sm font-medium text-slate-700"
    >
        Due Date
    </label>

    <input
        id="task-due-at"
        type="datetime-local"
        wire:model="due_at"
        class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10"
    >

    @error('due_at')
        <p class="mt-1.5 text-xs font-medium text-red-600">
            {{ $message }}
        </p>
    @enderror
</div>