<?php
use App\Enums\EnActivityType;
use App\Models\Lead;
use App\Models\LeadSource;
use App\Models\LeadStatus;
use App\Models\User;
use App\Services\Activity\ActivityCommandService;

it('can add an activity to a lead', function () {
    $source = LeadSource::factory()->create();
    $status = LeadStatus::factory()->create();
    $owner = User::factory()->create();
    $lead = Lead::factory()->create([
        'lead_source_id'=>$source->id,
        'lead_status_id'=>$status->id,
        'owner_id'=>$owner->id,
    ]);
    $data = [
        'activityType' => EnActivityType::CALL,
        'subject' => 'Follow up with lead',
        'description' => 'Called the lead to discuss the proposal.',
    ];

    app(ActivityCommandService::class)->add(
        $lead,
        $data,
        $owner->id
    );

    $this->assertDatabaseHas('activities', [
        'user_id' => $owner->id,
        'type' => EnActivityType::CALL->value,
        'subject' => 'Follow up with lead',
        'description' => 'Called the lead to discuss the proposal.',
    ]);
});