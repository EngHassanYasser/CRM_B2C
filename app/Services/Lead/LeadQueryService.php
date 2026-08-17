<?php

namespace App\Services\Lead;

use App\Models\LeadSource;
use App\Models\LeadStatus;
use Illuminate\Database\Eloquent\Collection;

class LeadQueryService
{
    public function getStatuses()
    {
        return LeadStatus::get(['id', 'name']);
    }

    public function getSources()
    {
        return LeadSource::get(['id', 'name']);
    }
}
