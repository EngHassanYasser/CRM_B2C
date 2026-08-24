<?php

use App\Enums\EnActivityStatus;
use App\Enums\EnActivityType;
use App\Models\Activity;
use App\Services\Activity\ActivityCommandService;

it('updates an activity successfully', function () {

    $activity = Activity::factory()->create([
        'subject' => 'Old Subject',
        'description' => 'Old description',
        'type' => EnActivityType::CALL->value,
        'occurred_at' => '2026-08-20 10:00:00',
        'status' => EnActivityStatus::PENDING,
    ]);

    $data = [
        'subject' => 'Updated Subject',
        'description' => 'Updated description',
        'type' => EnActivityType::EMAIL,
        'occurredAt' => '2026-08-24 14:30:00',
        'status' => EnActivityStatus::COMPLETED,
    ];

    $service = app(ActivityCommandService::class);

    $result = $service->update($data, $activity->id);

    expect($result)->toBeTrue();

    $activity->refresh();

    expect($activity->subject)
        ->toBe('Updated Subject')
        ->and($activity->description)
        ->toBe('Updated description')
        ->and($activity->type)
        ->toBe(EnActivityType::EMAIL)
        ->and($activity->occurred_at->format('Y-m-d H:i:s'))
        ->toBe('2026-08-24 14:30:00')
        ->toBe('2026-08-24 14:30:00')
        ->and($activity->status)
        ->toBe(EnActivityStatus::COMPLETED);
});
