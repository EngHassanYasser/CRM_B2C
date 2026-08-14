<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function assignee()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function taskable()
    {
        return $this->morphTo();
    }
}
