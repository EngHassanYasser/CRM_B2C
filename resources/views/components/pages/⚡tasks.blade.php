<?php


use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Services\Task\TaskQueryService;

new #[Layout('components.layouts.⚡app')] class extends Component
{
   public array $stats = [];

    public function mount(TaskQueryService $taskQueyrService)
    {
        $this->stats = $taskQueyrService->getstats();
    }
};

?>
<div x-data="{
    filterOpen: false,
}">
    <x-tasks.page-header />
    <x-tasks.stats :$stats />
    
    <div class="overflow-hidden rounded-xl
               border border-slate-200
               bg-white shadow-sm">
        <x-tasks.toolbar />
        <livewire:tasks.table />
    </div>
    <x-tasks.pagination />
</div>
