<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductCategorySeeder::class,
            ProductSeeder::class
    
        ]);
    }
}
