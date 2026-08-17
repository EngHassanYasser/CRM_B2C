<div class="mt-5 flex justify-end gap-2 border-t border-slate-100 pt-4">

    <button type="button" @click="model=false"  wire:click="close" class="h-10 rounded-lg border border-slate-200 px-4 text-sm font-medium text-slate-700
                               hover:bg-slate-50">
        Cancel
    </button>

    <button type="submit" wire:loading.attr="disabled" wire:target="save" class="h-10 rounded-lg bg-indigo-600 px-4 text-sm font-semibold text-white
                               hover:bg-indigo-700 disabled:cursor-not-allowed disabled:opacity-50">
        <span wire:loading.remove wire:target="save">
            Create Lead
        </span>

        <span wire:loading wire:target="save">
            Creating...
        </span>
    </button>

</div>