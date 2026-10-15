<div class="mt-4">
    <label for="task-description" class="mb-1.5 block text-sm font-medium text-slate-700">
        Description
    </label>

    <textarea id="task-description" wire:model="Taskdescription" rows="4"
        placeholder="Add additional details about this task..."
        class="w-full resize-none rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10"></textarea>

    @error('description')
        <p class="mt-1.5 text-xs font-medium text-red-600">
            {{ $message }}
        </p>
    @enderror
</div>
