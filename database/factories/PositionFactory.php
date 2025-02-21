<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class PositionFactory extends Factory
{

    public function definition(): array
{
    return [
        'code' => fake()->stateAbbr(),
        'name' => fake()->jobTitle(),
        'description' => fake()->sentence(),
    ];
}

}
