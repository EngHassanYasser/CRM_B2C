<?php

use App\Enums\EnTaskPriority;
use App\Enums\EnTaskStatus;
use App\Models\Task;
use App\Models\User;
use App\Services\Task\TaskCommandService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

describe('Create Task', function () {

    it('creates a task for the authenticated user', function () {

        $user = User::factory()->create();

        $data = [
            'title' => 'Follow up with client',
            'description' => 'Contact client regarding proposal',
            'priority' => EnTaskPriority::HIGH,
            'status' => EnTaskStatus::PENDING,
            'due_at' => now()->addDay(),
        ];

        $this->actingAs($user);

        $task = app(TaskCommandService::class)->Create($data);

        expect($task)
            ->toBeInstanceOf(Task::class)
            ->assigned_to->toBe($user->id)
            ->title->toBe($data['title'])
            ->description->toBe($data['description'])
            ->priority->toBe($data['priority'])
            ->status->toBe($data['status'])
            ->taskable_type->toBe(User::class)
            ->taskable_id->toBe($user->id);

        $this->assertDatabaseHas('tasks', [
            'id' => $task->id,
            'assigned_to' => $user->id,
            'title' => $data['title'],
            'description' => $data['description'],
            'priority' => $data['priority'],
            'status' => $data['status'],
            'taskable_type' => User::class,
            'taskable_id' => $user->id,
        ]);
    });
});