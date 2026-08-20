<?php
use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('components.layouts.⚡app')]
class extends Component
{
   
};
?>
<div x-data="{
            filterOpen: false,
            model:false,
            mode :'add',
        }">
    <livewire:leads.page-header />
    <livewire:leads.statistics />
    <div class="overflow-hidden rounded-xl
               border border-slate-200
               bg-white shadow-sm">
        <livewire:leads.table />
        <livewire:leads.model/>
    </div>
</div>