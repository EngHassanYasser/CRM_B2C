<div x-show="taskModal" x-transition.opacity
     class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/50 p-4"
     @keydown.escape.window="taskModal = false">

     <div x-show="taskModal" x-transition @click.outside="taskModal = false"
         class="w-full max-w-lg rounded-xl bg-white shadow-xl">

         <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">

             <div>

                 <h2 class="font-semibold text-slate-900">
                     Add Task
                 </h2>

                 <p class="mt-1 text-xs text-slate-500">
                     Create a task for this lead.
                 </p>

             </div>

             <button type="button" @click="taskModal = false" class="rounded-lg p-2 text-slate-400 hover:bg-slate-100">
                 ×
             </button>

         </div>


         <div class="space-y-5 p-5">

             <!-- Title -->
             <div>

                 <label class="mb-2 block text-sm font-medium text-slate-700">
                     Task Title
                 </label>

                 <input type="text" placeholder="e.g. Follow up with John"
                     class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-sm outline-none focus:border-slate-500 focus:ring-2 focus:ring-slate-200">

             </div>


             <!-- Due Date -->
             <div>

                 <label class="mb-2 block text-sm font-medium text-slate-700">
                     Due Date
                 </label>

                 <input type="datetime-local"
                     class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-sm outline-none focus:border-slate-500 focus:ring-2 focus:ring-slate-200">

             </div>


             <!-- Description -->
             <div>

                 <label class="mb-2 block text-sm font-medium text-slate-700">
                     Description
                 </label>

                 <textarea rows="4" placeholder="Task details..."
                     class="w-full resize-none rounded-lg border border-slate-300 px-3 py-2.5 text-sm outline-none focus:border-slate-500 focus:ring-2 focus:ring-slate-200"></textarea>

             </div>

         </div>


         <div class="flex justify-end gap-2 border-t border-slate-200 px-5 py-4">

             <button type="button" @click="taskModal = false"
                 class="rounded-lg border border-slate-300 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">
                 Cancel
             </button>

             <button type="button" @click="taskModal = false"
                 class="rounded-lg bg-slate-900 px-4 py-2 text-sm font-medium text-white hover:bg-slate-800">
                 Create Task
             </button>

         </div>

     </div>

 </div>
