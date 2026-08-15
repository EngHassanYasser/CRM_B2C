<?php

use Livewire\Component;

new class extends Component
{
    //
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{ $title ?? 'Sales CRM' }}
    </title>

    @vite([
    'resources/css/app.css',
    'resources/js/app.js'
    ])

    @livewireStyles
</head>


<body class="min-h-screen bg-slate-50">

    <div x-data="{
            sidebarOpen: false
        }" class="min-h-screen">

        {{-- =====================================================
        MOBILE SIDEBAR OVERLAY
        ====================================================== --}}

        <div x-show="sidebarOpen" x-cloak @click="sidebarOpen = false"
            class="fixed inset-0 z-40 bg-slate-900/50 lg:hidden"></div>


        {{-- =====================================================
        SIDEBAR
        ====================================================== --}}

        <aside class="fixed inset-y-0 left-0 z-50 w-64
                   transform border-r border-slate-200
                   bg-white transition-transform duration-200
                   lg:translate-x-0" :class="sidebarOpen
                ? 'translate-x-0'
                : '-translate-x-full'">

            {{-- Logo --}}

            <div class="flex h-16 items-center
                       border-b border-slate-200 px-5">

                <a href="#" class="text-xl font-bold
                           tracking-tight text-slate-900">
                    Sales CRM
                </a>

            </div>


            {{-- Navigation --}}

            <nav class="flex h-[calc(100vh-4rem)] flex-col p-4">

                <div class="space-y-1">

                    {{-- Dashboard --}}

                    <a href="#" class="flex items-center gap-3
                               rounded-lg px-3 py-2.5
                               text-sm font-medium
                               text-slate-600
                               transition hover:bg-slate-50
                               hover:text-slate-900">

                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l9-9 9 9M5 10v10h14V10M9 20v-6h6v6" />
                        </svg>

                        Dashboard

                    </a>


                    {{-- Sales Section --}}

                    <div class="pt-6">

                        <p class="mb-2 px-3 text-xs
                                   font-semibold uppercase
                                   tracking-wider text-slate-400">
                            Sales
                        </p>


                        {{-- Leads --}}

                        <a href="{{ route('leads.index') }}" wire:navigate class="flex items-center gap-3
                                   rounded-lg bg-indigo-50
                                   px-3 py-2.5 text-sm
                                   font-medium text-indigo-700">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                            Leads

                        </a>


                        {{-- Deals --}}

                        <a href="{{ route('deals.index') }}" wire:navigate class="mt-1 flex items-center gap-3
                                   rounded-lg px-3 py-2.5
                                   text-sm font-medium
                                   text-slate-600
                                   transition hover:bg-slate-50
                                   hover:text-slate-900">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7h18M3 12h18M3 17h18" />
                            </svg>

                            Deals

                        </a>


                        {{-- Activities --}}

                        <a href="{{ route('activities.index') }}" wire:navigate class="mt-1 flex items-center gap-3
                                   rounded-lg px-3 py-2.5
                                   text-sm font-medium
                                   text-slate-600
                                   transition hover:bg-slate-50
                                   hover:text-slate-900">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>

                            Activities

                        </a>


                        {{-- Tasks --}}

                        <a href="{{ route('tasks.index') }}" wire:navigate class="mt-1 flex items-center gap-3
                                   rounded-lg px-3 py-2.5
                                   text-sm font-medium
                                   text-slate-600
                                   transition hover:bg-slate-50
                                   hover:text-slate-900">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5h6M9 9h6M9 13h6M9 17h3M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z" />
                            </svg>

                            Tasks

                        </a>

                    </div>


                    {{-- Management Section --}}

                    <div class="pt-6">

                        <p class="mb-2 px-3 text-xs
                                   font-semibold uppercase
                                   tracking-wider text-slate-400">
                            Management
                        </p>


                        {{-- Users --}}

                        <a href="#" class="flex items-center gap-3
                                   rounded-lg px-3 py-2.5
                                   text-sm font-medium
                                   text-slate-600
                                   transition hover:bg-slate-50
                                   hover:text-slate-900">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 12a4 4 0 100-8 4 4 0 000 8zm-7 8a7 7 0 0114 0" />
                            </svg>

                            Users

                        </a>


                        {{-- Settings --}}

                        <a href="#" class="mt-1 flex items-center gap-3
                                   rounded-lg px-3 py-2.5
                                   text-sm font-medium
                                   text-slate-600
                                   transition hover:bg-slate-50
                                   hover:text-slate-900">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317a1.724 1.724 0 013.35 0 1.724 1.724 0 002.573 1.066 1.724 1.724 0 012.898 1.675 1.724 1.724 0 001.066 2.573 1.724 1.724 0 010 3.35 1.724 1.724 0 00-1.066 2.573 1.724 1.724 0 01-2.898 1.675 1.724 1.724 0 00-2.573 1.066 1.724 1.724 0 01-3.35 0 1.724 1.724 0 00-2.573-1.066 1.724 1.724 0 01-2.898-1.675 1.724 1.724 0 00-1.066-2.573 1.724 1.724 0 010-3.35 1.724 1.724 0 001.066-2.573 1.724 1.724 0 012.898-1.675 1.724 1.724 0 002.573-1.066z" />

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                            Settings

                        </a>

                    </div>

                </div>


                {{-- User Profile --}}

                <div class="mt-auto border-t
                           border-slate-200 pt-4">

                    <div class="flex items-center gap-3 px-2">

                        <div class="flex h-9 w-9
                                   items-center justify-center
                                   rounded-full bg-indigo-100
                                   text-xs font-bold
                                   text-indigo-700">
                            HS
                        </div>


                        <div class="min-w-0">

                            <p class="truncate text-sm
                                       font-semibold
                                       text-slate-900">
                                Hassan
                            </p>

                            <p class="truncate text-xs
                                       text-slate-500">
                                Admin
                            </p>

                        </div>

                    </div>

                </div>

            </nav>

        </aside>


        {{-- =====================================================
        MAIN CONTENT
        ====================================================== --}}

        <div class="lg:pl-64">

            {{-- TOPBAR --}}

            <header class="sticky top-0 z-30 flex h-16
                       items-center border-b
                       border-slate-200
                       bg-white/95 px-4
                       backdrop-blur sm:px-6">

                {{-- Mobile menu --}}

                <button type="button" @click="sidebarOpen = true" class="mr-3 rounded-lg p-2
                           text-slate-500
                           hover:bg-slate-100
                           lg:hidden">
                    ☰
                </button>


                {{-- Search --}}

                <div class="hidden w-full max-w-md md:block">

                    <div class="relative">

                        <svg class="absolute left-3 top-1/2
                                   h-4 w-4 -translate-y-1/2
                                   text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35m2.35-5.65a8 8 0 1 1-16 0 8 8 0 0 1 16 0z" />
                        </svg>


                        <input type="search" placeholder="Search..." class="h-10 w-full rounded-lg
                                   border border-slate-200
                                   bg-slate-50 pl-10 pr-4
                                   text-sm outline-none
                                   transition
                                   focus:border-indigo-400
                                   focus:bg-white
                                   focus:ring-2
                                   focus:ring-indigo-100">

                    </div>

                </div>


                {{-- Right side --}}

                <div class="ml-auto flex items-center gap-3">

                    {{-- Notification --}}

                    <button type="button" class="relative rounded-lg p-2
                               text-slate-500
                               hover:bg-slate-100">

                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>


                        <span class="absolute right-1.5 top-1.5
                                   h-2 w-2 rounded-full
                                   bg-red-500"></span>

                    </button>


                    {{-- User --}}

                    <button type="button" class="flex h-9 w-9
                               items-center justify-center
                               rounded-full bg-indigo-100
                               text-xs font-bold
                               text-indigo-700">
                        HS
                    </button>

                </div>

            </header>


            {{-- PAGE SLOT --}}

            <main class="p-4 sm:p-6 lg:p-8">

                <div class="mx-auto max-w-[1600px]">

                    {{ $slot }}

                </div>

            </main>

        </div>

    </div>


    @livewireScripts

</body>

</html>