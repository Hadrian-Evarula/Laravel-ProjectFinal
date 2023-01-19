<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'movie_name' => $this->faker->name,
            'movie_genre' => $this->faker->randomLetter,
            'country' => $this->faker->country,
            'rental_cost' =>$this->faker->randomDigit,
            'rental_duration' => $this->faker->randomNumber,

        ];
    }
}
