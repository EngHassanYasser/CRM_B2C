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

<div>
    <livewire:erp-settings.page-header />
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">
        <livewire:erp-settings.navigation />
        {{-- Settings Content --}}
        <section class="lg:col-span-9">
            <livewire:erp-settings.general-settings />
            <livewire:erp-settings.lead-defaults />
            <livewire:erp-settings.notifications />
            <livewire:erp-settings.danger-zone />
        </section>
    </div>
</div>