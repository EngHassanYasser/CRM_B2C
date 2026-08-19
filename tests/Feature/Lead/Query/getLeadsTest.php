<?php

use App\Models\Activity;
use App\Models\Lead;
use App\Models\LeadSource;
use App\Models\LeadStatus;
use App\Models\User;
use App\Services\Lead\LeadQueryService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Pagination\LengthAwarePaginator;

uses(RefreshDatabase::class);

it('gets paginated leads with their relationships', function () {

    $source = LeadSource::factory()->create([
        'name' => 'Facebook',
    ]);

    $status = LeadStatus::factory()->create([
        'name' => 'New',
    ]);

    $owner = User::factory()->create([
        'name' => 'Hassan',
    ]);

    $leads = Lead::factory()
        ->count(5)
        ->create([
            'lead_source_id' => $source->id,
            'lead_status_id' => $status->id,
            'owner_id' => $owner->id,
        ]);

    foreach ($leads as $lead) {
        Activity::factory()->create([
            'activityable_id' => $lead->id,
            'activityable_type' => Lead::class,
        ]);
    }

    $result = app(LeadQueryService::class)->getLeads();

    expect($result)
        ->toBeInstanceOf(LengthAwarePaginator::class)
        ->count()->toBe(5);

    $lead = $result->first();

    expect($lead->first_name)->not->toBeNull()
        ->and($lead->lead_source)
        ->not->toBeNull()
        ->and($lead->lead_source->id)
        ->toBe($source->id)
        ->and($lead->lead_source->name)
        ->toBe('Facebook')
        ->and($lead->lead_status->id)
        ->toBe($status->id)
        ->and($lead->owner->id)
        ->toBe($owner->id)
        ->and($lead->latestActivity)
        ->not->toBeNull();
});