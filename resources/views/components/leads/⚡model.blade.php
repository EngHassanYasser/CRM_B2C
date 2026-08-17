<?php

use App\Exceptions\LeadAlreadyExistsException;
use App\Services\Lead\LeadCommandService;
use App\Services\Lead\LeadQueryService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

new class extends Component
{
    public string $firstName = '';

    public string $lastName = '';

    public string $email = '';

    public string $phone = '';

    public ?int $leadSourceId = null;

    public ?int $leadStatusId = null;

    public Collection $sources;

    public Collection $statuses;

    public function mount(LeadQueryService $leadQueryService): void
    {
        $this->sources = $leadQueryService->getSources();
        $this->statuses = $leadQueryService->getstatuses();
    }

    protected function rules(): array
    {
        return [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'leadSourceId' => ['required', 'integer', 'exists:lead_sources,id'],
            'leadStatusId' => ['required', 'integer', 'exists:lead_statuses,id'],
        ];
    }
    public function save(LeadCommandService $leadCommandService): void
    {
        $validated = $this->validate();

        try {
            $leadCommandService->create($validated,Auth::id());

            $this->resetForm();

            $this->dispatch('lead-created');

        } catch (LeadAlreadyExistsException $exception) {
            $this->addError(
                'lead',
                'this lead already exists'
            );
        }
    }

    public function close(): void
    {
        $this->resetForm();

    }

    private function resetForm(): void
    {
        $this->reset([
            'firstName',
            'lastName',
            'email',
            'phone',
            'leadStatusId',
            'leadSourceId',
        ]);

        $this->resetValidation();
    }
};
?>
<div>
    <div x-show="model" x-cloak x-on:lead-created.window="model = false"
        class="fixed inset-0 z-50 flex items-center justify-center p-4">
        <div class="absolute inset-0 bg-slate-900/50" @click="$wire.close()"></div>
        <div class="relative w-full max-w-2xl rounded-xl bg-white shadow-xl" @click.stop>
            <x-leads.model.header />
            <form wire:submit="save" class="p-5">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <x-leads.form.first-name />
                    <x-leads.form.last-name />
                    <x-leads.form.email />
                    <x-leads.form.phone />
                    <x-leads.form.lead-source :sources="$sources" />
                    <x-leads.form.lead-status :statuses="$statuses" />
                </div>
              
                    @error('lead')
                <span class="mt-2 block text-center text-red-500">
                    {{ $message }}
                </span>
                @enderror
                  <x-leads.form.actions />
            </form>
        </div>
    </div>
</div>