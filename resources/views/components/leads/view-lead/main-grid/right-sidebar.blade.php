<div class="lg:col-span-2 space-y-6">
    <!-- ================================================= -->
    <!-- ACTIVITY TIMELINE -->
    <!-- ================================================= -->

    <div class="rounded-xl border border-slate-200 bg-white shadow-sm">

        <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">

            <div>

                <h2 class="font-semibold text-slate-900">
                    Activity Timeline
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    Recent interactions with this lead
                </p>

            </div>


            <button type="button" @click="activityModal = true"
                class="rounded-lg border border-slate-300 px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">
                + Activity
            </button>

        </div>


        <div class="p-5">

            <div class="relative">

                <!-- Timeline Line -->
                <div class="absolute bottom-5 left-4 top-5 w-px bg-slate-200"></div>


                <template x-for="activity in activities" :key="activity.id">

                    <div class="relative mb-8 flex gap-4 last:mb-0">


                        <!-- Icon -->
                        <div
                            class="relative z-10 flex h-8 w-8 shrink-0 items-center justify-center rounded-full border-4 border-white bg-slate-100">

                            <!-- Call -->
                            <template x-if="activity.type === 'call'">

                                <svg class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498A1 1 0 0121 15.28V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>

                            </template>


                            <!-- Email -->
                            <template x-if="activity.type === 'email'">

                                <svg class="h-4 w-4 text-purple-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>

                            </template>


                            <!-- Meeting -->
                            <template x-if="activity.type === 'meeting'">

                                <svg class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>

                            </template>


                            <!-- Status -->
                            <template x-if="activity.type === 'status'">

                                <svg class="h-4 w-4 text-orange-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </template>


                            <!-- Note -->
                            <template x-if="activity.type === 'note'">

                                <svg class="h-4 w-4 text-yellow-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>

                            </template>

                        </div>


                        <!-- Content -->
                        <div class="min-w-0 flex-1">

                            <div class="flex items-start justify-between gap-4">

                                <div class="min-w-0">

                                    <h3 class="text-sm font-semibold text-slate-900" x-text="activity.title"></h3>

                                    <p class="mt-1 text-sm leading-6 text-slate-600" x-text="activity.description">
                                    </p>

                                    <p class="mt-2 text-xs text-slate-400">

                                        <span x-text="activity.user"></span>

                                        <span class="mx-1">
                                            •
                                        </span>

                                        <span x-text="activity.date"></span>

                                        <span class="mx-1">
                                            •
                                        </span>

                                        <span x-text="activity.time"></span>

                                    </p>

                                </div>


                                <!-- Menu -->
                                <div class="relative shrink-0" @click.outside="activityMenu = null">

                                    <button type="button"
                                        @click="activityMenu = activityMenu === activity.id ? null : activity.id"
                                        class="rounded-lg p-2 text-slate-400 hover:bg-slate-100 hover:text-slate-600">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.5a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                        </svg>
                                    </button>


                                    <div x-show="activityMenu === activity.id" x-transition
                                        class="absolute right-0 z-20 mt-1 w-36 overflow-hidden rounded-lg border border-slate-200 bg-white py-1 shadow-lg">

                                        <button
                                            class="block w-full px-4 py-2 text-left text-sm text-slate-700 hover:bg-slate-50">
                                            Edit
                                        </button>

                                        <button
                                            class="block w-full px-4 py-2 text-left text-sm text-red-600 hover:bg-red-50">
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </template>

            </div>

        </div>

    </div>


    <!-- ================================================= -->
    <!-- TASKS -->
    <!-- ================================================= -->

    <div class="rounded-xl border border-slate-200 bg-white shadow-sm">

        <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">

            <div>

                <h2 class="font-semibold text-slate-900">
                    Tasks
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    Tasks related to this lead
                </p>

            </div>


            <button type="button" @click="taskModal = true"
                class="text-sm font-medium text-blue-600 hover:text-blue-700">
                + Add Task
            </button>

        </div>


        <div class="divide-y divide-slate-100">

            <template x-for="task in tasks" :key="task.id">

                <div class="flex gap-4 px-5 py-4">

                    <!-- Checkbox -->
                    <div class="pt-1">

                        <input type="checkbox" :checked="task.status === 'completed'"
                            class="h-4 w-4 rounded border-slate-300 text-slate-900 focus:ring-slate-500">

                    </div>


                    <!-- Task Content -->
                    <div class="min-w-0 flex-1">

                        <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">

                            <div>

                                <h3 class="text-sm font-medium"
                                    :class="task.status === 'completed' ?
                                        'text-slate-400 line-through' :
                                        'text-slate-800'"
                                    x-text="task.title"></h3>

                                <p class="mt-1 text-sm text-slate-500" x-text="task.description"></p>

                                <p class="mt-2 text-xs text-slate-400" x-text="task.due"></p>

                            </div>


                            <div>

                                <span x-show="task.status === 'pending'"
                                    class="rounded-full bg-yellow-50 px-2.5 py-1 text-xs font-medium text-yellow-700">
                                    Pending
                                </span>

                                <span x-show="task.status === 'completed'"
                                    class="rounded-full bg-green-50 px-2.5 py-1 text-xs font-medium text-green-700">
                                    Completed
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </template>

        </div>

    </div>


</div>
