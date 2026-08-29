<?php

use App\Services\Task\TaskQueryService;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('components.layouts.⚡app')] class extends Component
{
    public array $stats = [];

    public function mount(TaskQueryService $taskQueyrService)
    {
        $this->stats = $taskQueyrService->getstats();
    }

    public function render(TaskQueryService $taskQueyrService)
    {
        return $this->view([
            'tasks' => $taskQueyrService->getAll(),
        ]);
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
        <x-tasks.table :$tasks/>
    </div>
    <x-tasks.pagination />
</div>
