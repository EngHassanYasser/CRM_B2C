<?php

use App\Enums\EnActivityType;
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
    public ?int $taskId = null;

    public string $title = '';

    public ?string $Taskdescription = null;

    public string $priority = 'normal';

    public string $status = 'pending';

    public ?string $due_at = null;

    public ?int $assigned_to = null;

    public string $mode = 'create';

    protected $listeners = [
        'open-create-task-modal' => 'openCreate',
        'open-edit-task-modal' => 'openEdit',
    ];

    public function openEdit(int $taskId): void
    {
        $task = Task::findOrFail($taskId);

        $this->taskId = $task->id;
        $this->title = $task->title;
        $this->description = $task->description;
        $this->priority = $task->priority;
        $this->status = $task->status;
        $this->due_at = $task->due_at?->format('Y-m-d\TH:i');
        $this->assigned_to = $task->assigned_to;
    }

    public function addTask(TaskCommandService $taskCommandService): void
    {
        $validated = $this->validate([
            'title' => ['required', 'string', 'max:255'],

            'description' => ['nullable', 'string'],

            'priority' => ['required', Rule::in(array_column(EnTaskPriority::cases(), 'value'))],

            'status' => ['required', Rule::in(array_column(EnTaskStatus::cases(), 'value'))],

            'due_at' => ['nullable', 'date'],

            'assigned_to' => ['required', 'integer', 'exists:users,id'],
        ]);
        $taskCommandService->Create($validated);
    }

    public function close(): void
    {
        $this->resetForm();
    }

    private function resetForm(): void
    {
        $this->reset(['taskId', 'title', 'description', 'due_at', 'assigned_to', 'taskable_type', 'taskable_id']);

        $this->priority = 'normal';
        $this->status = 'pending';
        $this->mode = 'create';

        $this->resetValidation();
    }

    public function render()
    {
        $this->lead->load(['lead_source', 'lead_status', 'activities' => fn ($query) => $query->with('user:id,name')->latest('occurred_at')->limit(10)]);

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
    tasks: [{
            id: 1,
            title: 'Follow up with John',
            description: 'Follow up regarding the proposal.',
            due: 'Tomorrow · 02:00 PM',
            status: 'pending'
        },
        {
            id: 2,
            title: 'Send final proposal',
            description: 'Send the updated project proposal.',
            due: 'Aug 22 · 10:00 AM',
            status: 'pending'
        },
        {
            id: 3,
            title: 'Initial call',
            description: 'Complete initial discovery call.',
            due: 'Aug 18 · 11:00 AM',
            status: 'completed'
        }
    ]
}" class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

    <x-leads.view-lead.header :$lead />
    <x-leads.view-lead.pipline :$lead />
    <x-leads.view-lead.main-grid :$lead />
    <x-leads.view-lead.activity :$lead />
    <x-leads.view-lead.deal :$lead />
    <x-tasks.model :$lead :$priorities :$statuses :$users />

</div>
