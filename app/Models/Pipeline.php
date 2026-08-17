<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pipeline extends Model
{
    use HasFactory;
    public function stages()
    {
        return $this->hasMany(PipelineStage::class);
    }

    public function deals()
    {
        return $this->hasMany(Deal::class);
    }
}
