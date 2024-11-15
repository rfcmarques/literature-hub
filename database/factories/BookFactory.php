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
            'description' => $this->faker->paragraph,
            'published_at' => $this->faker->date,
            'isbn' => $this->faker->isbn13,
            'page_count' => $this->faker->numberBetween(100, 1000),
            'cover_image' => $this->faker->imageUrl(),
            'language' => $this->faker->languageCode,
            'publisher' => $this->faker->company,
            'author_id' => \App\Models\Author::factory(),
            'genre_id' => \App\Models\Genre::factory(),
        ];
    }
}
