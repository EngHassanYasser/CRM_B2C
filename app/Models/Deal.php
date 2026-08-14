<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function pipeline()
    {
        return $this->belongsTo(Pipline::class);
    }

    public function stage()
    {
        return $this->belongsTo(Pipline_stage::class, 'pipeline_stage_id');
    }

    public function activities()
    {
        return $this->morphMany(Activity::class, 'activityable');
    }

    public function tasks()
    {
        return $this->morphMany(Task::class, 'taskable');
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }
}
