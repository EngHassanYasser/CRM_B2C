<?php

namespace App\Services\Activity;

use App\Enums\EnActivityType;
use App\Models\Activity;
use Illuminate\Support\Facades\Cache;

class ActivityQueryService
{
    public function getStats(): array
    {
        return Cache::remember(
            'activity-stats',
            now()->addMinutes(10),
            fn () => Activity::query()
                ->selectRaw('
                COUNT(*) AS total,

                SUM(
                    CASE
                        WHEN type = ? THEN 1
                        ELSE 0
                    END
                ) AS calls,

                SUM(
                    CASE
                        WHEN type = ? THEN 1
                        ELSE 0
                    END
                ) AS emails,

                SUM(
                    CASE
                        WHEN type = ? THEN 1
                        ELSE 0
                    END
                ) AS meetings
            ', [EnActivityType::CALL->value,
                    EnActivityType::EMAIL->value,
                    EnActivityType::MEETING->value,
                ])->first()->toArray()
        );
    }
}
