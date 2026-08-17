<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('components.layouts.⚡app')]
class extends Component
{
    //
};
?>

<div class="space-y-6">
    <livewire:dashboard.page-header/>
    <livewire:dashboard.kpicards />
    <livewire:dashboard.people-and-activities />
    <livewire:dashboard.recent-leads-and-tasks />
    <livewire:dashboard.sales-performance />
</div>