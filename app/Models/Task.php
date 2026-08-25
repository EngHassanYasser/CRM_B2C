<?php

namespace App\Models;

use App\Enums\EnTaskStatus;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['assigned_to', 'title', 'description', 'priority', 'status', 'due_at', 'completed_at'])]
class Task extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'status' => EnTaskStatus::class,
        ];
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function taskable()
    {
        return $this->morphTo();
    }
}
