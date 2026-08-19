<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;
    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    public function activityable()
    {
        return $this->morphTo();
    }
}
