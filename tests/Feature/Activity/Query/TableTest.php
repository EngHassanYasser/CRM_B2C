<?php

use App\Models\Activity;
use App\Services\Activity\ActivityQueryService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('gets paginated activities', function () {
    Activity::factory()->count(15)->create();

    $service = app(ActivityQueryService::class);

    $result = $service->getActivities();

    expect($result->total())->toBe(15)
        ->and($result->perPage())->toBe(10)
        ->and($result->count())->toBe(10);
});
