<div>
    <label class="mb-1.5 block text-sm font-medium text-slate-700">
        Email
    </label>

    <input :disabled="mode == 'view' " type="email" wire:model="email" placeholder="ahmed@example.com" class="h-10 w-full rounded-lg border border-slate-200 px-3 text-sm
                                   outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100
           disabled:cursor-not-allowed
           disabled:bg-slate-100
           disabled:text-slate-400
           disabled:border-slate-200">

    @error('email')
    <span class="mt-1 block text-xs text-red-500">
        {{ $message }}
    </span>
    @enderror
</div>