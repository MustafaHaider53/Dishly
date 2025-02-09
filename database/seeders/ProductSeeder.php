<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Product::create([
        'name' => 'Grilled Salmon',
        'description' => 'Freshly grilled salmon with vegetables',
        'price' => 15.99,
        'image_url' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38',
        'category_id' => 1
    ]);

    // Add more products
}
}
