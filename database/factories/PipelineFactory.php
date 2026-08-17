<?php

namespace Database\Factories;

use App\Models\Pipeline;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pipeline>
 */
class PipelineFactory extends Factory
{
    protected $model = Pipeline::class;

    public function definition(): array
    {
        return [
            'name' => fake()->unique()->words(2, true),

            'description' => fake()->optional()->paragraph(),

            'is_default' => false,

            'is_active' => true,
        ];
    }
}