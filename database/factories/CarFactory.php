<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'creator_id' => 1,
            'name' => fake()->words(4),
            'description' => fake()->words(5),
            'price' => fake()->randomFloat(),
            'type_of_auction' => fake()->word(),
            'status' => Car::PUBLISHED,
            'localisation' => fake()->address(),
            'VIN' => fake()->randomNumber('9'),
            'mark' => fake()->word(),
            'modal' => fake()->word(),
            'generation' => fake()->word(),
            'category' => fake()->word(),
            'year_of_production' => fake()->year(),
            'engine_capacity' => fake()->randomFloat('1','1','5'),
            'mileage' => fake()->numberBetween(100, 1500000),
            'engine_power' => fake()->numberBetween(30, 1500),
            'fuel' => fake()->word(),
            'transmission' => fake()->word(),
            'body' => fake()->word(),
            'country' => fake()->country(),
            'color' => fake()->colorName(),
            'steering' => fake()->word(),
            'condition' => fake()->word(),
            'doors' => fake()->numberBetween(3,5),
            'additional_equipment' => fake()->words(12),
            'photos' => fake()->word(),
            'url' => fake()->url(),
            'slug' => fake()->slug(),
            'published_at' => now(),
            'views' => fake()->numberBetween(0, 100),
        ];
    }
}
