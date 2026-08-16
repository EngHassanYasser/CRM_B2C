<?php

namespace App\Services\Lead;

use App\Exceptions\LeadAlreadyExistsException;
use App\Models\Lead;
use Illuminate\Support\Facades\Auth;

class CreateLeadService
{
    public function create(array $array)
    {
        $isFound = Lead::where('email',$array['email'])->orWhere('phone', $array['phone'])->exists();

            if($isFound) {
                throw new LeadAlreadyExistsException();
            }

        return Lead::create([
            'first_name' => $array['firstName'],
            'last_name' => $array['lastName'],
            'email' => $array['email'],
            'phone' => $array['phone'],
            'lead_source_id' => $array['leadSourceId'],
            'lead_status_id' => $array['leadStatusId'],
            'owner_id' => Auth::id(),
        ]);
    }
}
