<?php

namespace App\Services\Activity;

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

    public function update(array $data, int $activityId) {}

    public function deleteById(int $activityId) {}
}
