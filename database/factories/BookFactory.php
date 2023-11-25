<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
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
            'author_id' => \App\Models\Author::factory(),
            'slug' => $this->faker->slug,
            'cover_image' => $this->faker->imageUrl(),
            'rate' => $this->faker->numberBetween(1, 5),
        ];
    }
}
