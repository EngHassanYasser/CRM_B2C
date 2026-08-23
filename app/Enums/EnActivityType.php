<?php

namespace App\Enums;

enum EnActivityType: string
{
    case CALL = 'call';
    case EMAIL = 'email';
    case MEETING = 'meeting';
    case NOTE = 'note';
    case TASK = 'task';
    case STATUS = 'status';

    public function label(): string
    {
        return match ($this) {
            self::CALL => 'Call',
            self::EMAIL => 'Email',
            self::MEETING => 'Meeting',
            self::NOTE => 'Note',
            self::TASK=>'Task',
            self::STATUS =>'status'

        };
    }
}
