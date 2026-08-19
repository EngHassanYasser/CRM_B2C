<?php

namespace Database\Factories;

use App\Models\Lead;
use App\Models\LeadSource;
use App\Models\LeadStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lead>
 */
class LeadFactory extends Factory
{
    protected $model = Lead::class;

    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),

            'last_name' => fake()->optional()->lastName(),

            'email' => fake()->unique()->safeEmail(),

            'phone' => fake()->optional()->phoneNumber(),

            'owner_id' => null,

            'score' => fake()->numberBetween(0, 100),
        ];
    }
}