<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new
#[Layout('components.layouts.⚡app')]
class extends Component
{
    //
};
?>
<div>
    <livewire:activities.page-header />
    <livewire:activities.statistics />
    <div x-data="{
            filterOpen: false
        }" class="overflow-hidden rounded-xl
               border border-slate-200
               bg-white shadow-sm">
        <livewire:activities.toolbar />
        <livewire:activities.table />
        <livewire:activities.pagination />
    </div>
</div>