<?php

namespace App\Services\Activity;

use App\Models\Activity;
use App\Models\Lead;

class ActivityCommandService
{
    public function add(Lead $lead, array $data, int $userId)
    {
        $lead->activities()->create([
            'user_id' => $userId,
            'type' => $data['activityType'],
            'subject' => $data['subject'],
            'description' => $data['description'],
            'occurred_at' => now(),
        ]);
    }

    public function update(array $data, $id)
    {
        $activity = Activity::find($id);

        return $activity->update([
            'subject' => $data['subject'],
            'description' => $data['description'],
            'type' => $data['type']->value,
            'occurred_at'=>$data['occurredAt'],
            'status' => $data['status']->value,
        ]);
    }

    public function deleteById(int $activityId) {}
}
