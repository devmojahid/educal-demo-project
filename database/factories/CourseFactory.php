<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
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
            'description' => $this->faker->text,
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl(),
            'user_id' => $this->faker->numberBetween(1, 5),
            'category_id' => $this->faker->numberBetween(1, 5),
            'tag_id' => $this->faker->numberBetween(1, 5),
            'review_id' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->numberBetween(1, 5),
            'discount_price' => $this->faker->numberBetween(1, 5),
            'topic' => $this->faker->text,
            'level' => $this->faker->text,
            'language' => $this->faker->text,
            'requirement' => $this->faker->text,
            'what_you_learn' => $this->faker->text,
            'duration' => $this->faker->text,
            'lesson' => $this->faker->text,
            'video' => $this->faker->text,
            'file' => $this->faker->text,
            'quiz' => $this->faker->text,
            'certificate' => $this->faker->text,
            'access' => $this->faker->text,
            'any_device' => $this->faker->text,
            'anytime' => $this->faker->text,
            'support' => $this->faker->text,
            'meta_title' => $this->faker->text,
            'meta_description' => $this->faker->text,
            'meta_keywords' => $this->faker->text,
            'rating' => $this->faker->numberBetween(1, 5),
            'total_student' => $this->faker->numberBetween(1, 5),
        ];
    }
}
