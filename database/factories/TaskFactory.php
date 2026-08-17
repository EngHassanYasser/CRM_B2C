<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'assigned_to' => User::factory(),

            'title' => fake()->sentence(4),

            'description' => fake()->optional()->paragraph(),

            'priority' => fake()->randomElement([
                'low',
                'normal',
                'high',
                'urgent',
            ]),

            'status' => 'pending',

            'due_at' => fake()->optional()->dateTimeBetween(
                'now',
                '+30 days'
            ),

            'completed_at' => null,

            'taskable_type' => User::class,

            'taskable_id' => User::factory(),
        ];
    }
}