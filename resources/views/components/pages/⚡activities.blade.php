<?php

use App\Enums\EnActivityStatus;
use App\Enums\EnActivityType;
use App\Models\Activity;
use App\Models\User;
use App\Services\Activity\ActivityCommandService;
use App\Services\Activity\ActivityQueryService;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('components.layouts.⚡app')] class extends Component
{
    use WithPagination;

    public string $search = '';

    public ?int $userId = null;

    public ?string $from = null;

    public ?string $to = null;

    public ?string $activityableType = null;

    public array $stats = [];

    public ?int $deletingActivityId = -1;

    public ?int $editingActivityId = -1;


    public ?int $activityId = null;

    public string $subject = '';

    public string $description = '';

    public ?EnActivityStatus $status = null;

    public ?EnActivityType $type = null;

    public ?string $occurredAt;

    protected function rules(): array
    {
        return [
            'subject' => ['required', 'string', 'max:255'],

            'description' => ['nullable', 'string'],

            'type' => [
                'required',
                Rule::enum(EnActivityType::class),
            ],

            'status' => [
                'required',
                Rule::enum(EnActivityStatus::class),
            ],

            'occurredAt' => [
                'required',
                'date',
            ],
        ];
    }

    public function mount(ActivityQueryService $activityQueryService)
    {
        $this->occurredAt = now()->format('Y-m-d\TH:i');
        $this->stats = $activityQueryService->getStats();
    }

    #[On('activity-deleted')]
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
            'users' => User::get(['id', 'name']),
        ]);
    }

    public function deleteActivity(int $ActivityId): void
    {
        Activity::findOrFail($ActivityId)->delete();
        $this->dispatch('activity-deleted');

    }

    public function edit(int $activityId)
    {
        $activity = Activity::find($activityId);
        $this->activityId=$activity->id;
        $this->type = $activity->type;
        $this->subject = $activity->subject;
        $this->description = $activity->description;
        $this->occurredAt = $activity->occurred_at->format('Y-m-d\TH:i');
        $this->status = $activity->status;
    }

    public function update(ActivityCommandService $activityCommandService) {
        $validated =  $this->validate();
         $activityCommandService->update($validated,$this->activityId);

    }
};
?>
<div>
    <livewire:activities.page-header />
    <x-activities.stats :$stats />
    <div x-data="{
        filterOpen: false,
        model:false,
    }"
        class="overflow-hidden rounded-xl
               border border-slate-200
               bg-white shadow-sm">
       <x-activities.table.toolbar :$activities :$activityTypes :$users/>
        <x-activities.table :$activities/>
        <x-activities.model/>
    </div>
</div>
