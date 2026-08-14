<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pipline extends Model
{
    public function stages()
    {
        return $this->hasMany(Pipline_stage::class);
    }

    public function deals()
    {
        return $this->hasMany(Deal::class);
    }
}
