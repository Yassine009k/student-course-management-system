<?php

namespace Database\Factories;

use App\Models\Talent;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(),
            'priority'=>fake()->randomElement(['easy','low','high']),
            'talent_id'=>Talent::inRandomOrder()->first()->id,
        ];
    }
}
