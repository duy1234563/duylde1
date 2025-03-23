<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class FruitFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'color' => $this->faker->safeColorName(),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'quantity' => $this->faker->numberBetween(1, 50),
            'category_id' => Category::factory(),
        ];
    }
}
