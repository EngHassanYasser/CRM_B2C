<?php

use App\Enums\EnActivityType;
use App\Models\Lead;
use App\Services\Activity\ActivityCommandService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Enum;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('components.layouts.⚡app')]
class extends Component
{
    public Lead $lead;

    public EnActivityType $activityType = EnActivityType::CALL;

    public string $subject = '';

    public string $description = '';

    public function render()
    {
        $this->lead->load([
            'lead_source',
            'lead_status',
            'activities' => fn ($query) => $query
                ->with('user:id,name')
                ->latest('occurred_at')
                ->limit(10),
        ]);

        return $this->view();
    }

    protected function rules(): array
    {

        return [
            'activityType' => [
                'required',
                new Enum(EnActivityType::class),
            ],

            'subject' => [
                'required',
                'string',
                'max:255',
            ],

            'description' => [
                'nullable',
                'string',
            ],
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

    <x-leads.view-lead.header :$lead/>
    <x-leads.view-lead.pipline :$lead/>
    <x-leads.view-lead.main-grid :$lead/>
    <x-leads.view-lead.activity :$lead/>
    <x-leads.view-lead.task :$lead/>
    <x-leads.view-lead.deal :$lead/>
</div>
