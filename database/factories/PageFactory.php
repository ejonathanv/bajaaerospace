<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $title = $this->faker->sentence(3);
        $slug = Str::slug($title);
        $add_to_navbar = $this->faker->boolean();
        $name = $add_to_navbar ? $this->faker->word() : null;

        return [
            'title' => $title,
            'subtitle' => $this->faker->sentence(6),
            'slug' => $slug,
            'content' => $this->faker->paragraph(10),
            'cover' => 'default.jpg',
            'published' => true,
            'template' => 'default',
            'category' => 'uncategorized',
            'tags' => 'test',
            'meta_title' => $title,
            'meta_description' => $this->faker->paragraph(2),
            'add_to_navbar' => $add_to_navbar,
            'add_to_footer' => $add_to_navbar,
            'name_on_navbar' => $name,
        ];
    }
}
