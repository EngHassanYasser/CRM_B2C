<?php

use App\Enums\EnActivityType;
use App\Enums\EnMode;
use App\Enums\EnTaskPriority;
use App\Enums\EnTaskStatus;
use App\Models\Lead;
use App\Models\Task;
use App\Models\User;
use App\Services\Activity\ActivityCommandService;
use App\Services\Task\TaskCommandService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('components.layouts.⚡app')] class extends Component
{
    public ?int $task_id = null;

    public EnMode $mode = EnMode::CREATE;

    public string $title = '';

    public ?string $Task_description = null;

    public EnTaskPriority $priority = EnTaskPriority::NORMAL;

    public EnTaskStatus $status = EnTaskStatus::PENDING;

    public ?string $due_at = null;

    public string $taskable_type;

    public int $taskable_id;

    protected $listeners = [
        'open-create-task-modal' => 'openCreate',
        'open-edit-task-modal' => 'openEdit',
    ];

    public function openEdit(int $taskId): void
    {
        $task = Task::findOrFail($taskId);

        $this->task_id = $task->id;
        $this->title = $task->title;
        $this->description = $task->description;
        $this->priority = $task->priority;
        $this->status = $task->status;
        $this->due_at = $task->due_at?->format('Y-m-d\TH:i');
    }

    public function save(TaskCommandService $taskCommandService): void
    {
        $validated = $this->validate([
            'title' => ['required', 'string', 'max:255'],

            'description' => ['nullable', 'string'],

            'priority' => ['required', Rule::in(array_column(EnTaskPriority::cases(), 'value'))],

            'status' => ['required', Rule::in(array_column(EnTaskStatus::cases(), 'value'))],

            'due_at' => ['nullable', 'date'],

            'taskable_type' => ['required', 'string'],
            'taskable_id' => ['required', 'integer'],
        ]);

        if ($this->mode == EnMode::CREATE) {
            $taskCommandService->Create($validated);
        } else {
            $taskCommandService->update($validated, $this->taskId);
        }
    }

    public function close(): void
    {
        $this->resetForm();
    }

    private function resetForm(): void
    {
        $this->reset(['taskId', 'title', 'description', 'due_at', 'assigned_to', 'taskable_type', 'taskable_id']);

        $this->priority =EnTaskPriority::NORMAL;
        $this->status = EnTaskStatus::PENDING;
        $this->mode = EnMode::CREATE;

        $this->resetValidation();
    }

    public function render()
    {
        $this->lead->load(['lead_source', 'lead_status', 'activities.User','tasks'=> fn ($query) => $query->with('user:id,name')->latest('created_at')->limit(10)]);

        return $this->view([
            'users' => User::query()->select('id', 'name')->orderBy('name')->get(),

            'priorities' => EnTaskPriority::cases(),

            'statuses' => EnTaskStatus::cases(),
        ]);
    }

    // ----------------------
    public Lead $lead;

    public EnActivityType $activityType = EnActivityType::CALL;

    public string $subject = '';

    public string $description = '';

    protected function rules(): array
    {
        return [
            'activityType' => ['required', new Enum(EnActivityType::class)],

            'subject' => ['required', 'string', 'max:255'],

            'description' => ['nullable', 'string'],
        ];
    }

    public function addActivity(ActivityCommandService $activityCommandService)
    {
        $data = $this->validate();
        $activityCommandService->add($this->lead, $data, Auth::id());
        $this->subject = '';
        $this->description = '';
    }
};
?>

<div x-data="{
    activityModal: false,
    taskModal: false,
    activityMenu: null,
    taskModel: false,
    taskMode: 'add',
}" class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

    <x-leads.view-lead.header :$lead />
    <x-leads.view-lead.pipline :$lead />
    <x-leads.view-lead.main-grid :$lead />
    <x-leads.view-lead.activity :$lead />
    <x-leads.view-lead.deal :$lead />
    <x-tasks.model :$lead :$priorities :$statuses :$users />

</div>
