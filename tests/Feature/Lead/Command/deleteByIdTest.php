<?php

use App\Models\Lead;
use App\Models\LeadSource;
use App\Models\LeadStatus;
use App\Models\User;
use App\Services\Lead\LeadCommandService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('deletes a lead by id', function () {
    $source = LeadSource::factory()->create();
    $status = LeadStatus::factory()->create();
    $owner= User::factory()->create();

    $lead = Lead::factory()->create(
        [
            'owner_id'=>$owner->id,
            'lead_source_id'=>$source->id,
            'lead_status_id'=>$status->id
        ]
    );

    $service = app(LeadCommandService::class);

    $result = $service->deleteById($lead->id);

    expect($result)->toBeTrue();

    $this->assertDatabaseMissing('leads', [
        'id' => $lead->id,
    ]);
});
it('throws an exception when lead does not exist', function () {
    $service = app(LeadCommandService::class);

    expect(fn () => $service->deleteById(999999))
        ->toThrow(ModelNotFoundException::class);
});