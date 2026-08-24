<?php

namespace App\Enums;

enum EnActivityStatus: string
{
    case PENDING = 'pending';
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';

    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'pending',
            self::COMPLETED => 'completed',
            self::CANCELLED => 'cancelled',
        };
    }
}
