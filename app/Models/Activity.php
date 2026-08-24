<?php

namespace App\Models;

use App\Enums\EnActivityStatus;
use App\Enums\EnActivityType;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['user_id',
    'type',
    'subject',
    'description',
    'occurred_at',
    'status'])]

class Activity extends Model
{
    use HasFactory;
      use SoftDeletes;

    protected $casts = [
        'occurred_at' => 'datetime',
    ];

    protected function formattedCreatedAt(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->created_at?->format('M d, Y, h:i A')
        );
    }
      protected function formattedOccurredAt(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->created_at?->format('M d, Y, h:i A')
        );
    }

    protected function casts(): array
    {
        return [
            'type' => EnActivityType::class,
            'status'=>EnActivityStatus::class,
        ];
    }

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    public function activityable()
    {
        return $this->morphTo();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
