<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
#[Fillable([
    'first_name',
    'last_name',
    'email',
    'phone',
    'lead_source_id',
    'lead_status_id',
    'owner_id',
    'score',
])]
class Lead extends Model
{
    use HasFactory;
    public function lead_source()
    {
        return $this->belongsTo(LeadSource::class);
    }

    public function lead_status()
    {
        return $this->belongsTo(LeadStatus::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function deals()
    {
        return $this->hasMany(Deal::class);
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

   public function latestActivity()
    {

    return $this->morphOne(Activity::class, 'activityable')
        ->latestOfMany('created_at');    }
}
