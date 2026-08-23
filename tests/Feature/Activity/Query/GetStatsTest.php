<?php

use App\Enums\EnActivityType;
use App\Models\Activity;
use App\Models\User;
use App\Services\Activity\ActivityQueryService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;

uses(RefreshDatabase::class);

it('gets activity stats', function () {
    $user = User::factory()->create();

    Activity::factory()->create([
        'user_id' => $user->id,
        'type' => EnActivityType::CALL,
    ]);

    Activity::factory()->create([
        'user_id' => $user->id,
        'type' => EnActivityType::CALL,
    ]);

    Activity::factory()->create([
        'user_id' => $user->id,
        'type' => EnActivityType::EMAIL,
    ]);

    Activity::factory()->create([
        'user_id' => $user->id,
        'type' => EnActivityType::MEETING,
    ]);


    $service = app(ActivityQueryService::class);

    expect($service->getStats())
        ->toMatchArray([
            'total' => '4',
            'calls' => '2',
            'emails' => '1',
            'meetings' => '1',
        ]);
});

it('caches activity stats', function () {
    Cache::clear();

    Activity::factory()->count(2)->create([
        'type' => EnActivityType::CALL,
    ]);

    $service = app(ActivityQueryService::class);

    $stats = $service->getStats();

    expect($stats)->toMatchArray([
        'total' => '2',
        'calls' => '2',
        'emails' => '0',
        'meetings' => '0',
    ]);

    expect(Cache::get('activity-stats'))
        ->toMatchArray($stats);
});