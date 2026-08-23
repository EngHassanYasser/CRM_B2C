<?php

use App\Enums\EnActivityType;
use App\Models\User;
use App\Services\Activity\ActivityQueryService;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('components.layouts.⚡app')] class extends Component
{
    use WithPagination;

    public string $search = '';

    public ?EnActivityType $type = null;

    public ?int $userId = null;

    public ?string $from = null;

    public ?string $to = null;

    public ?string $activityableType = null;

    public array $stats = [];

    public function mount(ActivityQueryService $activityQueryService)
    {
        $this->stats = $activityQueryService->getStats();
    }

    public function render(ActivityQueryService $activityQueryService)
    {
        return $this->view([
            'activities' => $activityQueryService->getActivities(
                search: $this->search,
                type: $this->type,
                userId: $this->userId,
                from: $this->from,
                to: $this->to,
                activityableType: $this->activityableType,
            ),
            'activityTypes' => EnActivityType::cases(),
            'users'=>User::get(['id','name']),
        ]);
    }
};
?>
<div>
    <livewire:activities.page-header />
    <x-activities.stats :$stats />
    <div x-data="{
        filterOpen: false
    }"
        class="overflow-hidden rounded-xl
               border border-slate-200
               bg-white shadow-sm">
       <x-activities.table.toolbar :$activities :$activityTypes :$users/>
        <x-activities.table :$activities/>
    </div>
</div>
