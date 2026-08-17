<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Activity>
 */
class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),

            'type' => fake()->randomElement([
                'call',
                'email',
                'meeting',
                'note',
                'message',
            ]),

            'subject' => fake()->sentence(4),

            'description' => fake()->optional()->paragraph(),

            'activityable_type' => User::class,

            'activityable_id' => User::factory(),

            'occurred_at' => fake()->dateTimeBetween(
                '-30 days',
                'now'
            ),
        ];
    }
}