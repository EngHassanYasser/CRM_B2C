<?php

use App\Services\Lead\LeadCommandService;
use App\Services\Lead\LeadQueryService;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

new class extends Component {
    use WithPagination;

    public $sources;
    public $statuses;
    public $owners;
    public string $search = '';

    public ?int $statusId = null;

    public ?int $sourceId = null;

    public ?int $ownerId = null;

    public ?string $createdFrom = null;

    public ?string $createdTo = null;

    #[On('lead-created')]
    #[On('lead-deleted')]
    #[On('lead-updated')]
   public function render(LeadQueryService $leadQueryService)
    {
        return $this->view([
            'leads' => $leadQueryService->getLeads(
                search: $this->search,
                statusId: $this->statusId,
                sourceId: $this->sourceId,
                ownerId: $this->ownerId,
                createdFrom: $this->createdFrom,
                createdTo: $this->createdTo,
            ),
        ]);
    }
    public function deleteLead(LeadCommandService $leadCommandService, int $leadId): void
    {
        $leadCommandService->deleteById($leadId);
        $this->dispatch('lead-deleted');
    }
    public function mount(LeadQueryService $leadQueryService)
    {
        $this->sources = $leadQueryService->getSources();
        $this->statuses = $leadQueryService->getStatuses();
        $this->owners = $leadQueryService->getOwners();
    }
};
?>
<div>
    <x-leads.table.filter :$sources :$statuses :$owners />

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-slate-200">
            <x-leads.table.thead/>
            <x-leads.table.tbody :$leads/>
        </table>
        <x-leads.table.pagination :$leads />
    </div>
</div>
