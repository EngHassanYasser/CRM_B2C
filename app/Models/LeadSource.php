<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
#[Fillable([
  'id','name'
])]
class LeadSource extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
}
