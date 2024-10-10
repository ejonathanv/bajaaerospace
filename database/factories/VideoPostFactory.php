<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VideoPost>
 */
class VideoPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'youtube_video_id' => $this->faker->regexify('[A-Za-z0-9_-]{11}'),
            'source' => $this->faker->randomElement(['YouTube', 'Facebook', 'Generic']),
            'cover' => $this->faker->imageUrl(600, 400),
            'slug' => $this->faker->slug,
            'published_at' => $this->faker->dateTimeThisYear,
        ];
    }
}
