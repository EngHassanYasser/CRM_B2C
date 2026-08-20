<div x-show="activityModal" x-transition.opacity
    class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/50 p-4"
    @keydown.escape.window="activityModal = false">

    <div x-show="activityModal" x-transition @click.outside="activityModal = false"
        class="w-full max-w-lg rounded-xl bg-white shadow-xl">

        <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">

            <div>

                <h2 class="font-semibold text-slate-900">
                    Add Activity
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    Record an interaction with this lead.
                </p>

            </div>

            <button type="button" @click="activityModal = false"
                class="rounded-lg p-2 text-slate-400 hover:bg-slate-100">
                ×
            </button>

        </div>


        <div class="space-y-5 p-5">

            <!-- Activity Type -->
            <div>

                <label class="mb-2 block text-sm font-medium text-slate-700">
                    Activity Type
                </label>

                <select
                    class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-sm outline-none focus:border-slate-500 focus:ring-2 focus:ring-slate-200">

                    <option>Call</option>
                    <option>Email</option>
                    <option>Meeting</option>
                    <option>Note</option>

                </select>

            </div>


            <!-- Subject -->
            <div>

                <label class="mb-2 block text-sm font-medium text-slate-700">
                    Subject
                </label>

                <input type="text" placeholder="Activity subject"
                    class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-sm outline-none focus:border-slate-500 focus:ring-2 focus:ring-slate-200">

            </div>


            <!-- Description -->
            <div>

                <label class="mb-2 block text-sm font-medium text-slate-700">
                    Description
                </label>

                <textarea rows="4" placeholder="Write activity details..."
                    class="w-full resize-none rounded-lg border border-slate-300 px-3 py-2.5 text-sm outline-none focus:border-slate-500 focus:ring-2 focus:ring-slate-200"></textarea>

            </div>

        </div>


        <div class="flex justify-end gap-2 border-t border-slate-200 px-5 py-4">

            <button type="button" @click="activityModal = false"
                class="rounded-lg border border-slate-300 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">
                Cancel
            </button>

            <button type="button" @click="activityModal = false"
                class="rounded-lg bg-slate-900 px-4 py-2 text-sm font-medium text-white hover:bg-slate-800">
                Add Activity
            </button>

        </div>

    </div>

</div>
