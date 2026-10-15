<div x-show="taskModel" x-cloak class="fixed inset-0 z-50 overflow-y-auto">
    {{-- Backdrop --}}
    <div x-show="taskModel" x-transition:enter="ease-out duration-200" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-150"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-slate-950/60 backdrop-blur-sm" @click='taskModel=false'></div>
    {{-- Modal Wrapper --}}
    <div class="relative flex min-h-full items-center justify-center p-4 sm:p-6">
        {{-- Modal --}}
        <div x-show="taskModel" x-transition:enter="ease-out duration-200"
            x-transition:enter-start="translate-y-4 scale-95 opacity-0"
            x-transition:enter-end="translate-y-0 scale-100 opacity-100" x-transition:leave="ease-in duration-150"
            x-transition:leave-start="translate-y-0 scale-100 opacity-100"
            x-transition:leave-end="translate-y-4 scale-95 opacity-0" @click.stop
            class="relative w-full max-w-2xl overflow-hidden rounded-2xl bg-white shadow-2xl ring-1 ring-black/5">
          <x-tasks.model.header/>
            {{-- Form --}}
            <form wire:submit="save">

                <div class="max-h-[70vh] space-y-6 overflow-y-auto px-6 py-6">

                    {{-- Task Information --}}
                    <div>
                        <div class="mb-4">
                            <h3 class="text-sm font-semibold text-slate-900">
                                Task Information
                            </h3>

                            <p class="mt-1 text-xs text-slate-500">
                                Define what needs to be done.
                            </p>
                        </div>
                        <x-tasks.model.title/>
                        <x-tasks.model.description />
                    </div>
                    {{-- Task Settings --}}
                    <div>

                        <div class="mb-4">
                            <h3 class="text-sm font-semibold text-slate-900">
                                Task Settings
                            </h3>

                            <p class="mt-1 text-xs text-slate-500">
                                Configure priority, status and ownership.
                            </p>
                        </div>


                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <x-tasks.model.priority :$priorities />
                            <x-tasks.model.status :$statuses/>
                            <x-tasks.model.due-date/>

                        </div>

                    </div>
                </div>
                <x-tasks.model.footer />
            </form>
        </div>
    </div>
</div>
