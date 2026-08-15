<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
<div class="border-b border-slate-200 p-4 sm:p-5">

    <div class="flex flex-col gap-4
                       xl:flex-row xl:items-center
                       xl:justify-between">
        <livewire:tasks.search />
        <livewire:tasks.filters />
    </div>
    <livewire:tasks.advanced-filters />
</div>