<?php

namespace Database\Factories;

use App\Models\LeadStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LeadStatus>
 */
class LeadStatusFactory extends Factory
{
    protected $model = LeadStatus::class;

    public function definition(): array
    {
        $statuses = [
            [
                'name' => 'Contacted',
                'source_order' => 88,
            ],
            [
                'name' => 'Unqualified',
                'source_order' => 81,
            ],
            [
                'name' => 'Qualified',
                'source_order' => 77,
            ],
            [
                'name' => 'New',
                'source_order' => 32,
            ],
            [
                'name' => 'Converted',
                'source_order' => 34,
            ],
            [
                'name' => 'Working',
                'source_order' => 37,
            ],
            [
                'name' => 'Lost',
                'source_order' => 7,
            ],
        ];

        return fake()->unique()->randomElement($statuses) + [
            'is_active' => true,
        ];
    }
}