<?php

namespace App\Services\Lead;

use App\Exceptions\LeadAlreadyExistsException;
use App\Models\Lead;

class LeadCommandService
{
    public function assignLead() {}

    public function changeLeadStatus() {}

    public function convertLeadToDeal() {}

    public function create(array $data,int $ownerId)
    {
        $isFound = false;

        if ($data['email'] !== null || $data['phone'] !== null) {
            $isFound = Lead::query()
                ->when(
                    $data['email'] !== null,
                    fn ($query) => $query->where('email', $data['email'])
                )->when(
                    $data['phone'] !== null,
                    fn ($query) => $query->orWhere('phone', $data['phone'])
                )->exists();
        }

        if ($isFound) {
            throw new LeadAlreadyExistsException;
        }

        return Lead::create([
            'first_name' => $data['firstName'],
            'last_name' => $data['lastName'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'lead_source_id' => $data['leadSourceId'],
            'lead_status_id' => $data['leadStatusId'],
            'owner_id' => $ownerId,
        ]);
    }

    public function qualifyLead() {}

    public function updateLead() {}
}
