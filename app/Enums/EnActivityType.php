<?php

namespace App\Enums;

enum EnActivityType: string
{
    case CALL = 'call';
    case EMAIL = 'email';
    case MEETING = 'meeting';
    
    public function label(): string
    {
        return match ($this) {
            self::CALL => 'call',
            self::EMAIL => 'email',
            self::MEETING => 'meeting',
        };
    }
}
