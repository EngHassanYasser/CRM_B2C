<?php

namespace App\Services\Lead;

use App\Models\Lead;
use App\Models\LeadSource;
use App\Models\LeadStatus;

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
public function getStats()
{
    $stats = Lead::query()
        ->join(
            'lead_statuses',
            'leads.lead_status_id',
            '=',
            'lead_statuses.id'
        )
        ->selectRaw("
            COUNT(*) AS total,

            SUM(
                CASE
                    WHEN lead_statuses.name = 'New'
                    THEN 1
                    ELSE 0
                END
            ) AS new,

            SUM(
                CASE
                    WHEN lead_statuses.name = 'Qualified'
                    THEN 1
                    ELSE 0
                END
            ) AS qualified
        ")
        ->first();

    $total = (int) $stats->total;
    $qualified = (int) $stats->qualified;

    $conversionRate = $total > 0
        ? round(($qualified / $total) * 100, 1)
        : 0.0;

    return [
        'total' => $total,
        'new' => (int) $stats->new,
        'qualified' => $qualified,
        'conversion_rate' => $conversionRate,
    ];
}
}
