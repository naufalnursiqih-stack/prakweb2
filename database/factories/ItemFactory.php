<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => 1,
            'name' => $this->faker->word(),
            'quantity' => $this->faker->randomNumber(2),
            'price' => $this->faker->randomNumber(6),
        ];
    }
}
