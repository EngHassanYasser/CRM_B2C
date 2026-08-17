<?php

namespace Database\Factories;

use App\Models\Pipeline;
use App\Models\PipelineStage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PipelineStage>
 */
class PipelineStageFactory extends Factory
{
    protected $model = PipelineStage::class;

    public function definition(): array
    {
        return [
            'pipeline_id' => Pipeline::factory(),

            'name' => fake()->unique()->words(2, true),

            'sort_order' => fake()->unique()->numberBetween(1, 100),

            'probability' => fake()->numberBetween(0, 100),

            'is_closed' => false,

            'is_won' => false,
        ];
    }
}