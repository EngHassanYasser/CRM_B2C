<?php

use App\Enums\EnTaskStatus;
use App\Models\Task;
use App\Models\User;
use App\Services\Task\TaskQueryService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;

uses(RefreshDatabase::class);

beforeEach(function () {
    Cache::flush();

    $this->user = User::factory()->create();

    $this->service = app(TaskQueryService::class);

    $this->actingAs($this->user);
});

/*
|--------------------------------------------------------------------------
| Basic Statistics
|--------------------------------------------------------------------------
*/

it('returns correct task statistics for the authenticated user', function () {
    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => EnTaskStatus::PENDING,
        'due_at' => now()->addDay(),
    ]);

    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => EnTaskStatus::PENDING,
        'due_at' => now()->addDays(2),
    ]);

    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => EnTaskStatus::COMPLETED,
        'due_at' => now()->addDay(),
    ]);

    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => EnTaskStatus::COMPLETED,
        'due_at' => now(),
    ]);

    $stats = $this->service->getStats();

    expect($stats)->toMatchArray([
        'total' => 4,
        'pending' => 2,
        'completed' => 2,
        'today' => 1,
    ]);
});

it('returns zero for all statistics when the user has no tasks', function () {
    $stats = $this->service->getStats();

    expect($stats)->toMatchArray([
        'total' => 0,
        'pending' => 0,
        'completed' => 0,
        'today' => 0,
    ]);
});

/*
|--------------------------------------------------------------------------
| User Isolation
|--------------------------------------------------------------------------
*/

it('only counts tasks assigned to the authenticated user', function () {
    $otherUser = User::factory()->create();

    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => EnTaskStatus::PENDING,
        'due_at' => now(),
    ]);

    Task::factory()->create([
        'assigned_to' => $otherUser->id,
        'status' => EnTaskStatus::PENDING,
        'due_at' => now(),
    ]);

    Task::factory()->create([
        'assigned_to' => $otherUser->id,
        'status' => EnTaskStatus::COMPLETED,
        'due_at' => now(),
    ]);

    $stats = $this->service->getStats();

    expect($stats)->toMatchArray([
        'total' => 1,
        'pending' => 1,
        'completed' => 0,
        'today' => 1,
    ]);
});

/*
|--------------------------------------------------------------------------
| Status Statistics
|--------------------------------------------------------------------------
*/

it('counts pending tasks correctly', function () {
    Task::factory()
        ->count(3)
        ->create([
            'assigned_to' => $this->user->id,
            'status' => EnTaskStatus::PENDING,
        ]);

    Task::factory()
        ->count(2)
        ->create([
            'assigned_to' => $this->user->id,
            'status' => EnTaskStatus::COMPLETED,
        ]);

    $stats = $this->service->getStats();

    expect($stats)->toMatchArray([
        'total' => 5,
        'pending' => 3,
        'completed' => 2,
    ]);
});

it('counts completed tasks correctly', function () {
    Task::factory()
        ->count(4)
        ->create([
            'assigned_to' => $this->user->id,
            'status' => EnTaskStatus::COMPLETED,
        ]);

    Task::factory()
        ->count(2)
        ->create([
            'assigned_to' => $this->user->id,
            'status' => EnTaskStatus::PENDING,
        ]);

    $stats = $this->service->getStats();

    expect($stats)->toMatchArray([
        'total' => 6,
        'pending' => 2,
        'completed' => 4,
    ]);
});

it('counts statuses correctly', function (
    EnTaskStatus $status,
    string $key
) {
    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => $status,
    ]);

    $stats = $this->service->getStats();

    expect($stats[$key])
        ->toBe(1);
})->with([
    'pending' => [
        EnTaskStatus::PENDING,
        'pending',
    ],

    'completed' => [
        EnTaskStatus::COMPLETED,
        'completed',
    ],
]);

/*
|--------------------------------------------------------------------------
| Today Statistics
|--------------------------------------------------------------------------
*/

it('counts tasks due today', function () {
    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => EnTaskStatus::PENDING,
        'due_at' => now()->startOfDay()->addHours(10),
    ]);

    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => EnTaskStatus::COMPLETED,
        'due_at' => now()->startOfDay()->addHours(15),
    ]);

    $stats = $this->service->getStats();

    expect($stats['today'])
        ->toBe(2);
});

it('does not count overdue tasks as today', function () {
    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => EnTaskStatus::PENDING,
        'due_at' => now()->subDay(),
    ]);

    $stats = $this->service->getStats();

    expect($stats['today'])
        ->toBe(0);
});

it('does not count future tasks as today', function () {
    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => EnTaskStatus::PENDING,
        'due_at' => now()->addDay(),
    ]);

    $stats = $this->service->getStats();

    expect($stats['today'])
        ->toBe(0);
});

it('does not count tasks without a due date as today', function () {
    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => EnTaskStatus::PENDING,
        'due_at' => null,
    ]);

    $stats = $this->service->getStats();

    expect($stats)->toMatchArray([
        'total' => 1,
        'pending' => 1,
        'completed' => 0,
        'today' => 0,
    ]);
});

/*
|--------------------------------------------------------------------------
| Cache
|--------------------------------------------------------------------------
*/

it('returns cached statistics on subsequent calls', function () {
    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => EnTaskStatus::PENDING,
        'due_at' => now(),
    ]);

    $firstStats = $this->service->getStats();

    expect($firstStats['total'])
        ->toBe(1);

    Task::factory()
        ->count(5)
        ->create([
            'assigned_to' => $this->user->id,
            'status' => EnTaskStatus::PENDING,
            'due_at' => now(),
        ]);

    $secondStats = $this->service->getStats();

    expect($secondStats['total'])
        ->toBe(1);
});

it('uses a separate cache key for each user', function () {
    $otherUser = User::factory()->create();

    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => EnTaskStatus::PENDING,
    ]);

    Task::factory()
        ->count(3)
        ->create([
            'assigned_to' => $otherUser->id,
            'status' => EnTaskStatus::PENDING,
        ]);

    $userStats = $this->service->getStats();

    expect($userStats['total'])
        ->toBe(1);

    $this->actingAs($otherUser);

    $otherUserStats = $this->service->getStats();

    expect($otherUserStats['total'])
        ->toBe(3);
});

it('refreshes statistics after cache expiration', function () {
    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => EnTaskStatus::PENDING,
    ]);

    $firstStats = $this->service->getStats();

    expect($firstStats['total'])
        ->toBe(1);

    Task::factory()
        ->count(2)
        ->create([
            'assigned_to' => $this->user->id,
            'status' => EnTaskStatus::PENDING,
        ]);

    $cachedStats = $this->service->getStats();

    expect($cachedStats['total'])
        ->toBe(1);

    $this->travel(6)->minutes();

    $freshStats = $this->service->getStats();

    expect($freshStats['total'])
        ->toBe(3);
});

/*
|--------------------------------------------------------------------------
| Return Types
|--------------------------------------------------------------------------
*/

it('returns integer values for all statistics', function () {
    Task::factory()->create([
        'assigned_to' => $this->user->id,
        'status' => EnTaskStatus::PENDING,
        'due_at' => now(),
    ]);

    $stats = $this->service->getStats();

    expect($stats['total'])
        ->toBeInt()
        ->and($stats['pending'])
        ->toBeInt()
        ->and($stats['completed'])
        ->toBeInt()
        ->and($stats['today'])
        ->toBeInt();
});