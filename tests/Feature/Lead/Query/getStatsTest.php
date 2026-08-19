<?php

use App\Models\Lead;
use App\Models\LeadSource;
use App\Models\LeadStatus;
use App\Services\Lead\LeadQueryService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
uses(RefreshDatabase::class);

it('returns correct lead statistics', function () {
    $owner = User::factory()->create();
  $sources = LeadSource::factory()->count(8)->create();
$statuses = LeadStatus::factory()->count(7)->create();
  $newStatus=$statuses->firstWhere('name','New');
  $qualifiedStatus=$statuses->firstWhere('name','Qualified');

    Lead::factory()->count(5)->create([
        'lead_source_id' => $sources->random()->id,
        'lead_status_id' => $newStatus->id,
        'owner_id'=>$owner->id,
    ]);

    Lead::factory()->count(3)->create([
        'lead_source_id' => $sources->random()->id,
        'lead_status_id' => $qualifiedStatus->id,
        'owner_id'=>$owner->id,
    ]);

    Lead::factory()->count(2)->create([
         'lead_source_id' => $sources->random()->id,
        'lead_status_id' => $statuses->random()->id,
        'owner_id'=>$owner->id,

    ]);

    $stats = app(LeadQueryService::class)->getStats();

    expect($stats)->toBe([
        'total' => 10,
        'new' => 5,
        'qualified' => 3,
        'conversion_rate' => 30.0,
    ]);
});
it('returns zero statistics when there are no leads', function () {
    $stats = app(LeadQueryService::class)->getStats();

    expect($stats)->toBe([
        'total' => 0,
        'new' => 0,
        'qualified' => 0,
        'conversion_rate' => 0.0,
    ]);
});
it('calculates conversion rate with one decimal place', function () {
    $owner = User::factory()->create();

    $sources = LeadSource::factory()
        ->count(8)
        ->create();

    $qualifiedStatus = LeadStatus::factory()->create([
        'name' => 'Qualified',
        'source_order' => 77,
    ]);

    $newStatus = LeadStatus::factory()->create([
        'name' => 'New',
        'source_order' => 32,
    ]);

    Lead::factory()
        ->count(187)
        ->state(fn () => [
            'lead_source_id' => $sources->random()->id,
            'lead_status_id' => $qualifiedStatus->id,
            'owner_id' => $owner->id,
        ])
        ->create();

    Lead::factory()
        ->count(813)
        ->state(fn () => [
            'lead_source_id' => $sources->random()->id,
            'lead_status_id' => $newStatus->id,
            'owner_id' => $owner->id,
        ])
        ->create();

    $stats = app(LeadQueryService::class)->getStats();

    expect($stats['total'])->toBe(1000)
        ->and($stats['qualified'])->toBe(187)
        ->and($stats['conversion_rate'])->toBe(18.7);
});