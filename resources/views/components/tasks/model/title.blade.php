<div>
    <label for="task-title" class="mb-1.5 block text-sm font-medium text-slate-700">
        Title
        <span class="text-red-500">*</span>
    </label>

    <input id="task-title" type="text" wire:model="title"
        placeholder="e.g. Follow up with client"
        class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10">

    @error('title')
        <p class="mt-1.5 text-xs font-medium text-red-600">
            {{ $message }}
        </p>
    @enderror
</div>