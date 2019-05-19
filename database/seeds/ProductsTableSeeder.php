<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Playstation 4',
                'slug' => 'playstation-4',
                'description' => 'description goes here',
                'price' => 399.99,
                'quantity' => 100,
                'image' => 'ps4.jpg',
                'type' => 'rental'
            ],
            [
                'name' => 'Xbox One',
                'slug' => 'xbox-one',
                'description' => 'description goes here',
                'price' => 449.99,
                'quantity' => 100,
                'image' => 'xbox-one.jpg',
                'type' => 'rental'
            ],
            [
                'name' => 'Apple Macbook Pro',
                'slug' => 'macbook-pro',
                'description' => 'description goes here',
                'price' => 2299.99,
                'quantity' => 100,
                'image' => 'macbook-pro.jpg',
                'type' => 'rental'
            ],
            [
                'name' => 'Apple iPad Retina',
                'slug' => 'ipad-retina',
                'description' => 'description goes here',
                'price' => 799.99,
                'quantity' => 100,
                'image' => 'ipad-retina.jpg',
                'type' => 'rental'
            ],
            [
                'name' => 'Acoustic Guitar',
                'slug' => 'acoustic-guitar',
                'description' => 'description goes here',
                'price' => 699.99,
                'quantity' => 100,
                'image' => 'acoustic.jpg',
                'type' => 'rental'
            ],
            [
                'name' => 'Electric Guitar',
                'slug' => 'electric-guitar',
                'description' => 'description goes here',
                'price' => 899.99,
                'quantity' => 100,
                'image' => 'electric.jpg',
                'type' => 'rental'
            ],
            [
                'name' => 'Headphones',
                'slug' => 'headphones',
                'description' => 'description goes here',
                'price' => 99.99,
                'quantity' => 100,
                'image' => 'headphones.jpg',
                'type' => 'rental'
            ],
            [
                'name' => 'Speakers',
                'slug' => 'speakers',
                'description' => 'description goes here',
                'price' => 499.99,
                'quantity' => 100,
                'image' => 'speakers.jpg',
                'type' => 'rental'
            ],
        ]);
    }
}
