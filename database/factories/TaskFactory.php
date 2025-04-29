<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
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
            //
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
            'status' => $this->faker->randomElement(['todo', 'in progress', 'done']),
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
        ];
    }
}
