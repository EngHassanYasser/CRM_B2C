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
    <livewire:leads.page-header />
    <livewire:leads.statistics />
    <div x-data="{
            filterOpen: false
        }" class="overflow-hidden rounded-xl
               border border-slate-200
               bg-white shadow-sm">
        <livewire:leads.toolbar />
        <livewire:leads.table />
        <livewire:leads.pagination />
    </div>
</div>