<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pipline_stage extends Model
{
    public function pipeline()
    {
        return $this->belongsTo(Pipline::class);
    }

    public function deals()
    {
        return $this->hasMany(Deal::class);
    }
}
