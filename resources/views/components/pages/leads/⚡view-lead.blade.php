<?php

use App\Models\Lead;
use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('components.layouts.⚡app')] 
class extends Component {
     public Lead $lead;

    public function mount(Lead $lead): void
    {
        $this->lead = $lead;
    }
};
?>

<div x-data="{
    activityModal: false,
    taskModal: false,
    activityMenu: null,

    activities: [{
            id: 1,
            type: 'call',
            title: 'Phone Call',
            description: 'Called John about the project requirements.',
            date: 'Today',
            time: '10:30 AM',
            user: 'Ahmed Mohamed'
        },
        {
            id: 2,
            type: 'email',
            title: 'Email Sent',
            description: 'Sent the project proposal to John.',
            date: 'Yesterday',
            time: '03:20 PM',
            user: 'Ahmed Mohamed'
        },
        {
            id: 3,
            type: 'meeting',
            title: 'Meeting',
            description: 'Discussed the project timeline and budget.',
            date: 'Aug 18',
            time: '01:00 PM',
            user: 'Ahmed Mohamed'
        },
        {
            id: 4,
            type: 'status',
            title: 'Status Changed',
            description: 'Lead status changed from Contacted to Qualified.',
            date: 'Aug 17',
            time: '11:15 AM',
            user: 'Ahmed Mohamed'
        },
        {
            id: 5,
            type: 'note',
            title: 'Note Added',
            description: 'John is interested in Laravel development.',
            date: 'Aug 16',
            time: '09:40 AM',
            user: 'Ahmed Mohamed'
        }
    ],

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

    <x-leads.view-lead.header />
    <x-leads.view-lead.pipline />
    <x-leads.view-lead.main-grid />
    <x-leads.view-lead.activity />
    <x-leads.view-lead.task />
    <x-leads.view-lead.deal />
</div>
