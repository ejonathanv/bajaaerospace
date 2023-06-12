<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $title = $this->faker->sentence(3);

        return [
            'title' => $title,
            'subtitle' => $this->faker->sentence(6),
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraph(10),
            'cover' => 'default.jpg',
            'published' => true,
            'template' => 'default',
            'category' => 'uncategorized',
            'tags' => 'test',
            'meta_title' => $title,
            'meta_description' => $this->faker->paragraph(2),
            'author' => $this->faker->name(),
        ];
    }
}
