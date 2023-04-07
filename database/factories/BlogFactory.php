<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->text,
            'content' => $this->faker->text,
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'slug' => $this->faker->slug,
            'meta_title' => $this->faker->text,
            'meta_description' => $this->faker->text,
            'meta_keywords' => $this->faker->text,
            'user_id' => $this->faker->numberBetween(1, 5),
            'category_id' => $this->faker->numberBetween(1, 5),
            'tag_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
