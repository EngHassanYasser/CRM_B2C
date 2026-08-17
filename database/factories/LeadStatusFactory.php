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
        return [
            'name' => fake()->unique()->words(2, true),

            'source_order' => fake()->unique()->numberBetween(1, 100),

            'is_active' => true,
        ];
    }
}