<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

{{-- Advanced Filters --}}

<div x-show="filterOpen" x-cloak x-transition class="mt-4 border-t
                       border-slate-200 pt-4">

    <div class="grid grid-cols-1
                           gap-4 md:grid-cols-3">

        <div>

            <label class="mb-1.5 block text-xs
                                   font-medium text-slate-600">
                Due From
            </label>

            <input type="date" class="h-10 w-full rounded-lg
                                   border border-slate-200
                                   px-3 text-sm outline-none">

        </div>


        <div>

            <label class="mb-1.5 block text-xs
                                   font-medium text-slate-600">
                Due To
            </label>

            <input type="date" class="h-10 w-full rounded-lg
                                   border border-slate-200
                                   px-3 text-sm outline-none">

        </div>


        <div>

            <label class="mb-1.5 block text-xs
                                   font-medium text-slate-600">
                Related To
            </label>

            <select class="h-10 w-full rounded-lg
                                   border border-slate-200
                                   bg-white px-3
                                   text-sm outline-none">

                <option>
                    All Records
                </option>

                <option>
                    Leads
                </option>

                <option>
                    Deals
                </option>

            </select>

        </div>

    </div>

</div>