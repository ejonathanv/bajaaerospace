<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $url = 'https://alltitude.com.mx/magazine38/mobile/index.html#p=32';

        return [
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->sentence(10),
            'slug' => $this->faker->slug(),
            'magazineThumb' => $this->faker->imageUrl(),
            'magazineUrl' => $url,
        ];
    }
}
