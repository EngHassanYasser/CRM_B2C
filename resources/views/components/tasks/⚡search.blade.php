<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
{{-- Search --}}

<div class="relative w-full xl:max-w-sm">

    <svg class="absolute left-3 top-1/2
                               h-4 w-4 -translate-y-1/2
                               text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-4.35-4.35m2.35-5.65a8 8 0 1 1-16 0 8 8 0 0 1 16 0z" />
    </svg>


    <input type="search" placeholder="Search tasks..." class="h-10 w-full rounded-lg
                               border border-slate-200
                               pl-10 pr-4 text-sm
                               outline-none transition
                               focus:border-indigo-400
                               focus:ring-2
                               focus:ring-indigo-100">

</div>