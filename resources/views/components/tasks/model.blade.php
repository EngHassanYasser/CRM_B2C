<div
    x-show="taskModel"
    x-cloak
    class="fixed inset-0 z-50 overflow-y-auto"
>
    {{-- Backdrop --}}
    <div
        x-show="taskModel"
        x-transition:enter="ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-slate-950/60 backdrop-blur-sm"
        @click='taskModel=false'
    ></div>


    {{-- Modal Wrapper --}}
    <div class="relative flex min-h-full items-center justify-center p-4 sm:p-6">

        {{-- Modal --}}
        <div
            x-show="taskModel"
            x-transition:enter="ease-out duration-200"
            x-transition:enter-start="translate-y-4 scale-95 opacity-0"
            x-transition:enter-end="translate-y-0 scale-100 opacity-100"
            x-transition:leave="ease-in duration-150"
            x-transition:leave-start="translate-y-0 scale-100 opacity-100"
            x-transition:leave-end="translate-y-4 scale-95 opacity-0"
            @click.stop
            class="relative w-full max-w-2xl overflow-hidden rounded-2xl bg-white shadow-2xl ring-1 ring-black/5"
        >

            {{-- Header --}}
            <div class="border-b border-slate-200 px-6 py-5">

                <div class="flex items-start justify-between gap-4">

                    <div class="flex items-start gap-4">

                        {{-- Icon --}}
                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600"
                        >
                            <svg
                                class="h-5 w-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M12 4v16m8-8H4"
                                />
                            </svg>
                        </div>

                        <div>
                            <h2
                                x-text="taskMode === 'create' ? 'Create Task' : 'Edit Task'"
                                class="text-lg font-semibold tracking-tight text-slate-900"
                            ></h2>

                            <p
                                x-text="taskMode === 'create'
                                    ? 'Create a new task and assign it to a team member.'
                                    : 'Update the task details and assignment.'"
                                class="mt-1 text-sm leading-5 text-slate-500"
                            ></p>
                        </div>

                    </div>


                    {{-- Close --}}
                    <button
                        type="button"
                        @click='taskModel=false'
                        class="rounded-lg p-2 text-slate-400 transition hover:bg-slate-100 hover:text-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
                    >
                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>

                </div>

            </div>


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


                        {{-- Title --}}
                        <div>
                            <label
                                for="task-title"
                                class="mb-1.5 block text-sm font-medium text-slate-700"
                            >
                                Title
                                <span class="text-red-500">*</span>
                            </label>

                            <input
                                id="task-title"
                                type="text"
                                wire:model="title"
                                placeholder="e.g. Follow up with client"
                                class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10"
                            >

                            @error('title')
                                <p class="mt-1.5 text-xs font-medium text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        {{-- Description --}}
                        <div class="mt-4">
                            <label
                                for="task-description"
                                class="mb-1.5 block text-sm font-medium text-slate-700"
                            >
                                Description
                            </label>

                            <textarea
                                id="task-description"
                                wire:model="Taskdescription"
                                rows="4"
                                placeholder="Add additional details about this task..."
                                class="w-full resize-none rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10"
                            ></textarea>

                            @error('description')
                                <p class="mt-1.5 text-xs font-medium text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

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

                            {{-- Priority --}}
                            <div>
                                <label
                                    for="task-priority"
                                    class="mb-1.5 block text-sm font-medium text-slate-700"
                                >
                                    Priority
                                </label>

                                <select
                                    id="task-priority"
                                    wire:model="priority"
                                    class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10"
                                >
                                    @foreach ($priorities as $priorityOption)
                                        <option value="{{ $priorityOption->value }}">
                                            {{ $priorityOption->label() }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('priority')
                                    <p class="mt-1.5 text-xs font-medium text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            {{-- Status --}}
                            <div>
                                <label
                                    for="task-status"
                                    class="mb-1.5 block text-sm font-medium text-slate-700"
                                >
                                    Status
                                </label>

                                <select
                                    id="task-status"
                                    wire:model="status"
                                    class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10"
                                >
                                    @foreach ($statuses as $statusOption)
                                        <option value="{{ $statusOption->value }}">
                                            {{ $statusOption->label() }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('status')
                                    <p class="mt-1.5 text-xs font-medium text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            {{-- Assigned To --}}
                            <div>
                                <label
                                    for="task-assigned"
                                    class="mb-1.5 block text-sm font-medium text-slate-700"
                                >
                                    Assigned To
                                    <span class="text-red-500">*</span>
                                </label>

                                <select
                                    id="task-assigned"
                                    wire:model="assigned_to"
                                    class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10"
                                >
                                    <option value="">
                                        Select team member
                                    </option>

                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('assigned_to')
                                    <p class="mt-1.5 text-xs font-medium text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            {{-- Due Date --}}
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

                        </div>

                    </div>

                </div>


                {{-- Footer --}}
                <div class="flex items-center justify-between border-t border-slate-200 bg-slate-50/80 px-6 py-4">

                    <p class="hidden text-xs text-slate-400 sm:block">
                        <span class="text-red-500">*</span>
                        Required fields
                    </p>

                    <div class="ml-auto flex items-center gap-3">

                        {{-- Cancel --}}
                        <button
                            type="button"
                            @click='taskModel=false'
                            class="rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-medium text-slate-700 shadow-sm transition hover:bg-slate-50 hover:text-slate-900 focus:outline-none focus:ring-4 focus:ring-slate-500/10"
                        >
                            Cancel
                        </button>


                        {{-- Save --}}
                        <button
                            type="button"
                            wire:click='addTask'
                            wire:loading.attr="disabled"
                            class="inline-flex min-w-[125px] items-center justify-center gap-2 rounded-xl bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-500/20 disabled:cursor-not-allowed disabled:opacity-60"
                        >

                            {{-- Normal --}}
                            <span
                                wire:loading.remove
                                x-text="taskMode === 'create'
                                    ? 'Create Task'
                                    : 'Update Task'"
                            ></span>

                            {{-- Loading --}}
                            <span
                                wire:loading
                                class="inline-flex items-center gap-2"
                            >
                                <svg
                                    class="h-4 w-4 animate-spin"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <circle
                                        class="opacity-25"
                                        cx="12"
                                        cy="12"
                                        r="10"
                                        stroke="currentColor"
                                        stroke-width="4"
                                    ></circle>

                                    <path
                                        class="opacity-75"
                                        fill="currentColor"
                                        d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"
                                    ></path>
                                </svg>

                                Saving...
                            </span>

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>
</div>