<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
#[Fillable(['assigned_to','title','description','priority','status','due_at','completed_at'])]
class Task extends Model
{
    use HasFactory;
    public function assignee()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function taskable()
    {
        return $this->morphTo();
    }
}
