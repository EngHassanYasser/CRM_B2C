  {{-- Header --}}
  <div class="border-b border-slate-200 px-6 py-5">

      <div class="flex items-start justify-between gap-4">

          <div class="flex items-start gap-4">

              {{-- Icon --}}
              <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                  <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 4v16m8-8H4" />
                  </svg>
              </div>

              <div>
                  <h2 x-text="taskMode === 'create' ? 'Create Task' : 'Edit Task'"
                      class="text-lg font-semibold tracking-tight text-slate-900"></h2>

                  <p x-text="taskMode === 'create'
                                    ? 'Create a new task and assign it to a team member.'
                                    : 'Update the task details and assignment.'"
                      class="mt-1 text-sm leading-5 text-slate-500"></p>
              </div>

          </div>


          {{-- Close --}}
          <button type="button" @click='taskModel=false'
              class="rounded-lg p-2 text-slate-400 transition hover:bg-slate-100 hover:text-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500/20">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
          </button>

      </div>

  </div>
