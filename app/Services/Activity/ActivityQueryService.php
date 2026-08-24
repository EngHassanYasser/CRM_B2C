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

    public function getActivities(
        ?string $search = null,
        ?EnActivityType $type = null,
        ?int $userId = null,
        ?string $from = null,
        ?string $to = null,
        ?string $activityableType = null,
    ) {
        return Activity::query()
            ->with(['user', 'activityable'])
            ->when($search, function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query
                        ->where('subject', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%");
                });
            })
            ->when($type, fn ($query) => $query->where('type', $type)
            )
            ->when($userId, fn ($query) => $query->where('user_id', $userId)
            )
            ->when($from, fn ($query) => $query->whereDate('occurred_at', '>=', $from)
            )
            ->when($to, fn ($query) => $query->whereDate('occurred_at', '<=', $to)
            )
            ->when($activityableType, fn ($query) => $query->where('activityable_type', $activityableType)
            )
            ->latest('occurred_at')
            ->paginate(10);
    }

    public function findById(int $id)
    {
        return Activity::findOrFail($id);
    }
}
