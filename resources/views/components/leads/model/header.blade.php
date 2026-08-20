<div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">

    <div>
        <h2 
        x-text="mode == 'add' ? 'Create Lead' : 'Update Lead' "
        class="text-base font-semibold text-slate-900">
        </h2>

        <p 
                x-text="mode == 'add' ? 'add a new lead' : 'edite existing lead' "
        class="mt-1 text-xs text-slate-500">
        </p>
    </div>

    <button type="button" @click="model=false"
        class="rounded-lg p-2 text-slate-400 hover:bg-slate-100 hover:text-slate-600">
        ✕
    </button>

</div>