<?php

namespace App\Services\Activity;

use App\Models\Lead;

class ActivityQueryService
{
    public function getStats() {}

    public function getActivities(Lead $lead)
    {
        $activities= $lead->activities()
            ->with('user:id,name')
            ->select([
                'id',
                'user_id',
                'type',
                'subject',
                'description',
                'occurred_at',
            ])
            ->get();
            dd($activities->first()->toArray());
    }
}
