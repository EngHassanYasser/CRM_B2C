<?php

use App\Enums\EnTaskPriority;
use App\Enums\EnTaskStatus;
use App\Models\Lead;
use App\Models\LeadSource;
use App\Models\LeadStatus;
use App\Models\Task;
use App\Models\User;
use App\Services\Task\TaskQueryService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->service = app(TaskQueryService::class);
});

it('returns paginated tasks', function () {
    Task::factory()->count(10)->create();

    $result = $this->service->getAll();

    expect($result)->toBeInstanceOf(\Illuminate\Pagination\LengthAwarePaginator::class)
        ->and($result->total())->toBe(10)
        ->and($result->count())->toBe(10);
});

it('returns the expected task columns', function () {
    $task = Task::factory()->create();

    $result = $this->service->getAll();

    $returnedTask = $result->first();

    expect($returnedTask->getAttributes())
        ->toHaveKeys([
            'id',
            'title',
            'description',
            'taskable_id',
            'taskable_type',
            'status',
            'assigned_to',
            'due_at',
            'priority',
        ]);
});

it('does not return columns that were not selected', function () {
    $task = Task::factory()->create();

    $result = $this->service->getAll();

    $returnedTask = $result->first();

    expect($returnedTask->getAttributes())
        ->not->toHaveKeys([
            'created_at',
            'updated_at',
        ]);
});

it('returns the correct task data', function () {
      $owner = User::factory()->create();
    $leadStatus = LeadStatus::factory()->create();
    $leadSource = LeadSource::factory()->create();
        $lead = Lead::factory()->create(
            [
                'lead_status_id'=>$leadStatus->id,
                'lead_source_id'=>$leadSource->id,
                'owner_id'=>$owner->id
            ]
        );

    $task = Task::factory()->create([
        'title' => 'Complete CRM Tasks',
        'description' => 'Implement task management module',
        'taskable_id' => 1,
        'taskable_type' => 'App\\Models\\User',
        'status' => EnTaskStatus::PENDING,
        'assigned_to' => $owner->id,
        'due_at' => '2026-08-30 10:00:00',
        'priority' => EnTaskPriority::HIGH,
        'taskable_type'=>Lead::class,
        'taskable_id'=>$lead->id
    ]);

    $result = $this->service->getAll();

    $returnedTask = $result->first();

    expect($returnedTask->id)->toBe($task->id)
        ->and($returnedTask->title)->toBe('Complete CRM Tasks')
        ->and($returnedTask->description)->toBe('Implement task management module')
        ->and($returnedTask->taskable_id)->toBe(1)
        ->and($returnedTask->taskable_type)->toBe('App\\Models\\Lead')
        ->and($returnedTask->status)->toBe(EnTaskStatus::PENDING)
        ->and($returnedTask->assigned_to)->toBe(1)
        ->and($returnedTask->priority)->toBe(EnTaskPriority::HIGH)
        ->and($returnedTask->due_at)->not->toBeNull();
});

it('returns an empty paginator when there are no tasks', function () {
    $result = $this->service->getAll();

    expect($result)->toBeInstanceOf(\Illuminate\Pagination\LengthAwarePaginator::class)
        ->and($result->total())->toBe(0)
        ->and($result->count())->toBe(0)
        ->and($result->items())->toBeEmpty();
});

it('returns all tasks when the total is less than the default per page', function () {
    Task::factory()->count(5)->create();

    $result = $this->service->getAll();

    expect($result->total())->toBe(5)
        ->and($result->count())->toBe(5)
        ->and($result->lastPage())->toBe(1);
});

it('paginates tasks when the number of tasks exceeds the default per page', function () {
    Task::factory()->count(30)->create();

    $result = $this->service->getAll();

    expect($result)->toBeInstanceOf(\Illuminate\Pagination\LengthAwarePaginator::class)
        ->and($result->total())->toBe(30)
        ->and($result->currentPage())->toBe(1)
        ->and($result->perPage())->toBe(15)
        ->and($result->lastPage())->toBe(2)
        ->and($result->count())->toBe(15);
});

it('returns the correct page of tasks', function () {
    Task::factory()->count(30)->create();

    $this->app['request']->merge([
        'page' => 2,
    ]);

    $result = $this->service->getAll();

    expect($result->currentPage())->toBe(2)
        ->and($result->total())->toBe(30)
        ->and($result->count())->toBe(15);
});

it('returns nullable task fields correctly', function () {
    $owner = User::factory()->create();

    $leadStatus = LeadStatus::factory()->create();
    $leadSource = LeadSource::factory()->create();

    $lead = Lead::factory()->create([
        'lead_status_id' => $leadStatus->id,
        'lead_source_id' => $leadSource->id,
        'owner_id' => $owner->id,
    ]);

    $task = Task::factory()->create([
        'description' => null,
        'due_at' => null,
        'taskable_type' => Lead::class,
        'taskable_id' => $lead->id,
    ]);

    $result = $this->service->getAll();

    $returnedTask = $result->getCollection()
        ->firstWhere('id', $task->id);

    expect($returnedTask)->not->toBeNull()
        ->and($returnedTask->description)->toBeNull()
        ->and($returnedTask->due_at)->toBeNull();
});

it('returns multiple tasks with their own data', function () {
    $firstTask = Task::factory()->create([
        'title' => 'First Task',
    ]);

    $secondTask = Task::factory()->create([
        'title' => 'Second Task',
    ]);

    $thirdTask = Task::factory()->create([
        'title' => 'Third Task',
    ]);

    $result = $this->service->getAll();

    expect($result->pluck('id'))
        ->toContain($firstTask->id)
        ->toContain($secondTask->id)
        ->toContain($thirdTask->id);

    expect($result->pluck('title'))
        ->toContain('First Task')
        ->toContain('Second Task')
        ->toContain('Third Task');
});
