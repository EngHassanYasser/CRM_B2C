<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('components.layouts.⚡app')]
class extends Component
{
    //
};

?>
<div>
    <livewire:tasks.page-header />
    <livewire:tasks.statistics />
    <div x-data="{
            filterOpen: false
        }" class="overflow-hidden rounded-xl
               border border-slate-200
               bg-white shadow-sm">

        <livewire:tasks.toolbar />
        <livewire:tasks.table />
    </div>
    <livewire:tasks.pagination />
</div>
</div>