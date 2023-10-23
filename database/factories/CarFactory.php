<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
        'name' => fake()->sentence,
        'model' => fake()->sentence,
        'engine size' => fake()->sentence,
        'transmission' => fake()->sentence,
        'colour' => fake()->sentence,
        'price' => fake()->sentence,
        'created_' => now(),
        'updated_at' => now(),
        ];
    }
};
