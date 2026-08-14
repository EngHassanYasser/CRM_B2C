<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lead_source extends Model
{
    public function leads()
    {
        return $this->hasMany(Lead::class, 'lead_source_id');
    }
}
