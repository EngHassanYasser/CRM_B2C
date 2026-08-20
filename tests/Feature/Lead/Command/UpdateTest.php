<?php

use App\Models\Lead;
use App\Models\LeadSource;
use App\Models\LeadStatus;
use App\Models\User;
use App\Services\Lead\LeadCommandService;

it('updates a lead successfully', function () {
    $source = LeadSource::factory()->create();
    $status = LeadStatus::factory()->create();
    $owner = User::factory()->create();
    $lead = Lead::factory()->create(
         [
        'first_name' => 'first name',
        'last_name' => 'last name',
        'email' => 'email@example.com',
        'phone' => '01099199999',
        'lead_source_id' => $source->id,
        'Lead_status_id' => $status->id,
        'owner_id'=>$owner->id,
    ]
    );

    $data = [
        'firstName' => 'Updated',
        'lastName' => 'Lead',
        'email' => 'updated@example.com',
        'phone' => '01099999999',
        'leadSourceId' => $source->id,
        'leadStatusId' => $status->id,
    ];

    $service = app(LeadCommandService::class);

    $result = $service->update($data, $lead->id);

    expect($result)->toBeTrue();

    $this->assertDatabaseHas('leads', [
        'id' => $lead->id,
        'first_name' => 'Updated',
        'last_name' => 'Lead',
        'email' => 'updated@example.com',
        'phone' => '01099999999',
        'lead_source_id' => $source->id,
        'lead_status_id' => $status->id,
    ]);
});