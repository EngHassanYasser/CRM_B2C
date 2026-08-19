<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
#[Fillable([
  'id','name'
])]
class LeadStatus extends Model
{
    use HasFactory;
    public function leads()
    {
        return $this->hasMany(Lead::class, 'lead_status_id');
    }
}
