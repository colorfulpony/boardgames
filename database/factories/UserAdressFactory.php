<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAdress>
 */
class UserAdressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'country' => $this->faker->country(),
            'region' => $this->faker->state(),
            'city_or_vilage' => $this->faker->city(),
            'street' => $this->faker->streetAddress(),
            'appartment' => $this->faker->buildingNumber(),
        ];
    }
}
