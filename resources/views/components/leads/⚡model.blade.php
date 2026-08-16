<?php

use App\Services\Lead\CreateLeadService;
use Livewire\Component;
new class extends Component
{
    private  CreateLeadService $createLeadService;
    public string $firstName = '';

    public string $lastName = '';

    public string $email = '';

    public string $phone = '';

    public string $company = '';

    public string $leadSource = '';

    protected function rules(): array
    {
        return [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'company' => ['nullable', 'string', 'max:255'],
            'leadSource' => ['nullable', 'string', 'max:100'],
        ];
    }

    public function save(): void
    {
        $validated = $this->validate();
        $this->createLeadService = new CreateLeadService();
        $this->createLeadService->create($validated);

        $this->resetForm();

        $this->dispatch('lead-created');
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
            'company',
            'leadSource',
        ]);

        $this->resetValidation();
    }
};
?>

<div>
    <div
        x-show="model"
        x-cloak
        class="fixed inset-0 z-50 flex items-center justify-center p-4"
    >

        {{-- Overlay --}}
        <div
            class="absolute inset-0 bg-slate-900/50"
            @click="$wire.close()"
        ></div>

        {{-- Modal --}}
        <div
            class="relative w-full max-w-2xl rounded-xl bg-white shadow-xl"
            @click.stop
        >

            {{-- Header --}}
            <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">

                <div>
                    <h2 class="text-base font-semibold text-slate-900">
                        Create Lead
                    </h2>

                    <p class="mt-1 text-xs text-slate-500">
                        Add a new lead.
                    </p>
                </div>

                <button
                    type="button"
                    @click="model=false"
                    class="rounded-lg p-2 text-slate-400 hover:bg-slate-100 hover:text-slate-600"
                >
                    ✕
                </button>

            </div>

            {{-- Form --}}
            <form wire:submit="save" class="p-5">

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                    {{-- First Name --}}
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-slate-700">
                            First Name
                        </label>

                        <input
                            type="text"
                            wire:model="firstName"
                            placeholder="Ahmed"
                            class="h-10 w-full rounded-lg border border-slate-200 px-3 text-sm
                                   outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                        >

                        @error('firstName')
                            <span class="mt-1 block text-xs text-red-500">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    {{-- Last Name --}}
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-slate-700">
                            Last Name
                        </label>

                        <input
                            type="text"
                            wire:model="lastName"
                            placeholder="Mohamed"
                            class="h-10 w-full rounded-lg border border-slate-200 px-3 text-sm
                                   outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                        >

                        @error('lastName')
                            <span class="mt-1 block text-xs text-red-500">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-slate-700">
                            Email
                        </label>

                        <input
                            type="email"
                            wire:model="email"
                            placeholder="ahmed@example.com"
                            class="h-10 w-full rounded-lg border border-slate-200 px-3 text-sm
                                   outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                        >

                        @error('email')
                            <span class="mt-1 block text-xs text-red-500">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    {{-- Phone --}}
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-slate-700">
                            Phone
                        </label>

                        <input
                            type="tel"
                            wire:model="phone"
                            placeholder="+20 100 000 0000"
                            class="h-10 w-full rounded-lg border border-slate-200 px-3 text-sm
                                   outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                        >

                        @error('phone')
                            <span class="mt-1 block text-xs text-red-500">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    {{-- Lead Source --}}
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-slate-700">
                            Lead Source
                        </label>

                        <select
                            wire:model="leadSource"
                            class="h-10 w-full rounded-lg border border-slate-200 bg-white px-3 text-sm
                                   outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                        >
                            <option value="">Select source</option>
                            <option value="website">Website</option>
                            <option value="facebook">Facebook</option>
                            <option value="linkedin">LinkedIn</option>
                            <option value="referral">Referral</option>
                        </select>

                        @error('leadSource')
                            <span class="mt-1 block text-xs text-red-500">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                </div>

                {{-- Actions --}}
                <div class="mt-5 flex justify-end gap-2 border-t border-slate-100 pt-4">

                    <button
                        type="button"
                        wire:click="close"
                        class="h-10 rounded-lg border border-slate-200 px-4 text-sm font-medium text-slate-700
                               hover:bg-slate-50"
                    >
                        Cancel
                    </button>

                    <button
                        type="submit"
                        wire:loading.attr="disabled"
                        wire:target="save"
                        class="h-10 rounded-lg bg-indigo-600 px-4 text-sm font-semibold text-white
                               hover:bg-indigo-700 disabled:cursor-not-allowed disabled:opacity-50"
                    >
                        <span wire:loading.remove wire:target="save">
                            Create Lead
                        </span>

                        <span wire:loading wire:target="save">
                            Creating...
                        </span>
                    </button>

                </div>

            </form>

        </div>
    </div>
</div>