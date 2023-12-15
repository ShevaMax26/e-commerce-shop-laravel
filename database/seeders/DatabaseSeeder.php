<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
//            RolePermissionSeeder::class,
//            UserSeeder::class,
//            SliderSeeder::class,
//            CategorySeeder::class,
//            BrandSeeder::class,
        ]);

        Product::factory()->count(10)->create();
    }
}
