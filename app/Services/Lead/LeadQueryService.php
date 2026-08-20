<?php

namespace App\Services\Lead;

use App\Models\Lead;
use App\Models\LeadSource;
use App\Models\LeadStatus;
use App\Models\User;

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

    // public function getLeads() {

    //     return Lead::select([
    //         'id',
    //         'first_name',
    //         'last_name',
    //         'email',
    //         'phone',
    //         'lead_source_id',
    //         'lead_status_id',
    //         'owner_id',
    //     ])
    //     ->with([
    //         'lead_source:id,name',
    //         'lead_status:id,name',
    //         'owner:id,name',
    //         'latestActivity' => function ($query) {
    //             $query->select([
    //                 'activities.id',
    //                 'activities.activityable_id',
    //                 'activities.activityable_type',
    //                 'activities.created_at',
    //             ]);
    //         },
    //     ])->paginate(5);
    // }
    public function getOwners() {
        return User::select(['id','name'])->get();
    }
public function getLeads(
    ?string $search = null,
    ?int $statusId = null,
    ?int $sourceId = null,
    ?int $ownerId = null,
    ?string $createdFrom = null,
    ?string $createdTo = null,
) {
    return Lead::query()
        ->select([
            'id',
            'first_name',
            'last_name',
            'email',
            'phone',
            'lead_source_id',
            'lead_status_id',
            'owner_id',
            'created_at',
        ])
        ->with([
            'lead_source:id,name',
            'lead_status:id,name',
            'owner:id,name',
            'latestActivity',
        ])
        ->when($search, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query
                    ->where('first_name', 'like', "%{$search}%")
                    ->orWhere('last_name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%");
            });
        })
        ->when($statusId, fn ($query) =>
            $query->where('lead_status_id', $statusId)
        )
        ->when($sourceId, fn ($query) =>
            $query->where('lead_source_id', $sourceId)
        )
        ->when($ownerId, fn ($query) =>
            $query->where('owner_id', $ownerId)
        )
        ->when($createdFrom, fn ($query) =>
            $query->whereDate('created_at', '>=', $createdFrom)
        )
        ->when($createdTo, fn ($query) =>
            $query->whereDate('created_at', '<=', $createdTo)
        )
        ->latest()
        ->paginate(10);
}
}
