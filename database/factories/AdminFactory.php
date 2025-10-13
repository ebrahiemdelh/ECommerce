<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('123123'),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'image_url' => 'default.png',
            'role' => fake()->randomElement(['superadmin', 'admin', 'editor']),
            'country_code' => fake()->countryCode(),
        ];
    }
}
