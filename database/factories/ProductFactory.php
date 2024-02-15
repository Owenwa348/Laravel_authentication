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
    public function definition(): array
    {
        return [
            'product_code' => fake()->unique()->regexify('[0-9]{5}'),
            'name_product' => fake()->word(),
            'details' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 0, 1000), // ราคาเป็นตัวเลขที่สุ่ม
            'remaining_amount' => fake()->numberBetween(0, 100), // จำนวนคงเหลือเป็นตัวเลขที่สุ่ม
        ];        
    }
}
