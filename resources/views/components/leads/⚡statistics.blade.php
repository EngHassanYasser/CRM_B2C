<?php

use App\Services\Lead\LeadQueryService;
use Livewire\Component;
use Livewire\Attributes\On;
new class extends Component
{
  public $stats = [];
    public function mount(LeadQueryService $leadQueryService): void {
        $this->stats = $leadQueryService->getStats();
    }

   #[On('lead-created')]
   #[On('lead-deleted')]
   #[On('lead-updated')]
    public function refreshStats(LeadQueryService $leadQueryService): void
    {
        $this->stats = $leadQueryService->getStats();
    }
};
?>
{{-- =========================
STATISTICS
========================== --}}

<div class="mb-6 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">


    {{-- Total Leads --}}
    <div class="rounded-xl border border-slate-200
                    bg-white p-5 shadow-sm">

        <div class="flex items-start justify-between">

            <div>

                <p class="text-sm font-medium text-slate-500">
                    Total Leads
                </p>

                <p class="mt-2 text-2xl font-bold text-slate-900">
                 {{  $stats['total'] }}
                </p>
            </div>


            <div class="flex h-10 w-10 items-center
                           justify-center rounded-lg
                           bg-indigo-50 text-indigo-600">

                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>

            </div>

        </div>

    </div>


    {{-- New Leads --}}
    <div class="rounded-xl border border-slate-200
                    bg-white p-5 shadow-sm">

        <p class="text-sm font-medium text-slate-500">
            New Leads
        </p>

        <p class="mt-2 text-2xl font-bold text-slate-900">
           {{ $stats['new'] }}
        </p>
    </div>


    {{-- Qualified --}}
    <div class="rounded-xl border border-slate-200
                    bg-white p-5 shadow-sm">

        <p class="text-sm font-medium text-slate-500">
            Qualified Leads
        </p>

        <p class="mt-2 text-2xl font-bold text-slate-900">
           {{ $stats['qualified'] }}
        </p>

    </div>


    {{-- Conversion --}}
    <div class="rounded-xl border border-slate-200
                    bg-white p-5 shadow-sm">

        <p class="text-sm font-medium text-slate-500">
            Conversion Rate
        </p>

        <p class="mt-2 text-2xl font-bold text-slate-900">
            {{$stats['conversion_rate']}}%
        </p>

    </div>

</div>