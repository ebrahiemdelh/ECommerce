<?php

namespace Database\Factories;

use App\Models\{Category, Vendor, Store};
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
        $price = fake()->randomFloat(2, 10, 500);
        $discountPrice = fake()->boolean(70) ? fake()->randomFloat(2, 10, $price) : null;
        return [
            'name' => fake()->word(),
            'category_id' => Category::factory(),
            'store_id' => Store::factory(),
            'description' => fake()->sentence(),
            'price' => $price,
            'discount_price' => $discountPrice,
            'stock' => fake()->numberBetween(0, 100),
            'rating' => fake()->randomFloat(1, 1, 5),
            'images' => json_encode([
                "https://picsum.photos/id/".fake()->numberBetween(0,1000)."/640/400",
                "https://picsum.photos/id/".fake()->numberBetween(0,1000)."/640/400"
            ]),
            'rating_No' => fake()->numberBetween(1, 1000),
        ];
    }
}
