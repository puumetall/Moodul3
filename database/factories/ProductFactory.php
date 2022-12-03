<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => 'https://picsum.photos/seed/'.fake()->uuid.'/300/200',
            'name' => fake()->words(3,true),
            'price' => rand(10, 1000),
            'description' => fake()->paragraph,
            'product_code' => fake()->unique()->postcode(),
            'company' => fake()->word(),
            'type' => fake()->randomElement(['CPU', 'Motherboard', 'HDD', 'SSD', 'Graphic Cards', 'Power supplies']),

        ];
    }
}
