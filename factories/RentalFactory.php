<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'movie_name'=>$this->faker->randomLetter,
            'rental_date'=>$this->faker->date,
            'rental_expiry'=>$this->faker->dateTimeBetween,
            'total_cost'=>$this->faker->randomDigit


        ];
    }
}
