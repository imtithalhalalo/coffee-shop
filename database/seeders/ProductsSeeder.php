<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create drinks
        Product::create([
            'name' => 'Strawberry drink',
            'image' => 'drink-1.jpeg',
            'price' => '4.9',
            'description' => 'A small river named Duden flows by their place and supplies',
            'type' => 'drinks',
        ]);

        Product::create([
            'name' => 'Macaron',
            'image' => 'drink-3.jpeg',
            'price' => '4.9',
            'description' => 'Strawberry macaron',
            'type' => 'desserts',
        ]);

        Product::create([
            'name' => 'Macaron',
            'image' => 'drink-2.jpeg',
            'price' => '4.9',
            'description' => 'A small river named Duden flows by their place and supplies',
            'type' => 'drinks',
        ]);
        Product::create([
            'name' => 'Strawberry drink',
            'image' => 'drink-4.jpeg',
            'price' => '4.9',
            'description' => 'A small river named Duden flows by their place and supplies',
            'type' => 'drinks',
        ]);

        Product::create([
            'name' => 'Strawberry Cheesecake',
            'image' => 'cake.jpeg',
            'price' => '7.2',
            'description' => 'Creamy cheesecake with a strawberry twist',
            'type' => 'desserts',
        ]);

        Product::create([
            'name' => 'Vanilla Ice Cream',
            'image' => 'drink-6.jpeg',
            'price' => '3.9',
            'description' => 'Smooth and creamy vanilla ice cream',
            'type' => 'drinks',
        ]);

        Product::create([
            'name' => 'Vanilla Ice Cream',
            'image' => 'drink-7.jpeg',
            'price' => '3.9',
            'description' => 'Smooth and creamy vanilla ice cream',
            'type' => 'drinks',
        ]);

        // Add more products as needed
    }
}
