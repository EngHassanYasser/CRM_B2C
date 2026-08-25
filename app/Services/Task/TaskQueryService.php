<?php

namespace App\Services\Task;

use App\Enums\EnTaskStatus;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class TaskQueryService
{
    public function getStats(): array
    {
        $userId = Auth::id();

        return Cache::remember(
            "tasks.stats.user.{$userId}",
            now()->addMinutes(5),
            function () use ($userId): array {

                $startOfToday = now()->startOfDay();
                $endOfToday = now()->endOfDay();

                $result = Task::query()
                    ->where('assigned_to', $userId)
                    ->selectRaw('
                    COUNT(*) AS total,

                    COALESCE(
                        SUM(
                            CASE
                                WHEN status = ?
                                THEN 1
                                ELSE 0
                            END
                        ),
                        0
                    ) AS pending,

                    COALESCE(
                        SUM(
                            CASE
                                WHEN status = ?
                                THEN 1
                                ELSE 0
                            END
                        ),
                        0
                    ) AS completed,

                    COALESCE(
                        SUM(
                            CASE
                                WHEN due_at >= ?
                                 AND due_at <= ?
                                THEN 1
                                ELSE 0
                            END
                        ),
                        0
                    ) AS today
                ', [
                        EnTaskStatus::PENDING->value,
                        EnTaskStatus::COMPLETED->value,
                        $startOfToday,
                        $endOfToday,
                    ])
                    ->first();

                return [
                    'total' => (int) $result->total,
                    'pending' => (int) $result->pending,
                    'completed' => (int) $result->completed,
                    'today' => (int) $result->today,
                ];
            }
        );
    }
}
