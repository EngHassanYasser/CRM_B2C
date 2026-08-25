<?php

use App\Services\Task\TaskQueryService;
use Livewire\Attributes\Layout;
use Livewire\Component;

new
 #[Layout('components.layouts.⚡app')] class extends Component {
    public array $stats = [];
    public function mount(TaskQueryService $taskQueyrService){
        $this->stats = $taskQueyrService->getstats();
    }
};

?>
<div>
    <x-tasks.page-header />
    <x-tasks.stats :$stats/>
    <div x-data="{
        filterOpen: false
    }"
        class="overflow-hidden rounded-xl
               border border-slate-200
               bg-white shadow-sm">
        <x-tasks.toolbar />
        <livewire:tasks.table />
    </div>
    <x-tasks.pagination />
</div>
</div>
