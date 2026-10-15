<?php

namespace App\Services\Task;

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TaskCommandService
{
    public function AssignTask(int $taskId, int $assignedTo): bool
    {
        $task = Task::find($taskId);

        return $task->update([
            'assigned_to' => $assignedTo,
        ]);
    }

    public function create(array $data, ?User $assignedTo = null): Task
    {
        $assignedTo ??= Auth::user();
        
        return Task::create([
            'assigned_to' => $assignedTo->id,
            'title' => $data['title'],
            'description' => $data['description'],
            'priority' => $data['priority'],
            'status' => $data['status'],
            'due_at' => $data['due_at'],
            'taskable_type' => $data['taskable_type'],
            'taskable_id' => $data['taskable_id'],
        ]);
    }
}
