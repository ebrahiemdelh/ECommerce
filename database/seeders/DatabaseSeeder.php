<?php

namespace Database\Seeders;

use App\Models\{User, Vendor, Store, Product, Category};
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(10)->create();
        Category::factory(10)->create();
        Vendor::factory(5)->create()->each(function ($vendor) {
            $vendor->stores()->saveMany(Store::factory(rand(1, 3))->make())->each(function ($store) {
                $store->products()->saveMany(Product::factory(rand(5, 20))->make());
            });
        });
    }
}
