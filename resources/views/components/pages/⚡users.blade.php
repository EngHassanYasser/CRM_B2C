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
   <livewire:users.page-header/>
  <livewire:users.statistics/>
    {{-- Users Table --}}
    <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
       <livewire:users.toolbar/>
       <livewire:users.table/>
        <livewire:users.pagination/>
    </div>
</div>