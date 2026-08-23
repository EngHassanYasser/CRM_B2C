<?php

use App\Services\Activity\ActivityQueryService;
use Livewire\Component;
use Livewire\Attributes\Layout;

new
#[Layout('components.layouts.⚡app')]
class extends Component
{
    public array $stats=[];
    public function mount(ActivityQueryService $activityQueryService){
        $this->stats = $activityQueryService->getStats();
    }
};
?>
<div>
    <livewire:activities.page-header />
    <x-activities.stats  :$stats/>
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