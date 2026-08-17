<div>
    <label class="mb-1.5 block text-sm font-medium text-slate-700">
        Last Name
    </label>

    <input type="text" wire:model="lastName" placeholder="Mohamed" class="h-10 w-full rounded-lg border border-slate-200 px-3 text-sm
                                   outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100">

    @error('lastName')
    <span class="mt-1 block text-xs text-red-500">
        {{ $message }}
    </span>
    @enderror
</div>