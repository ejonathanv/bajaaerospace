<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'start_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'end_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'location' => $this->faker->city(),
            'address' => $this->faker->address(),
            'flyer' => 'default.jpg',
            'slug' => $this->faker->slug(),
            'published' => $this->faker->boolean(),
        ];
    }
}
