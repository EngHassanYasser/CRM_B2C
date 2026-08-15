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

<div class="space-y-6">
    <livewire:deals.page-header />
    <livewire:deals.stats />
    <livewire:deals.toolbar />
    <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
        <livewire:deals.table />
        <livewire:deals.pagination />
    </div>
</div>