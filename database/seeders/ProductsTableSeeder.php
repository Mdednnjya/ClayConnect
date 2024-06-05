<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the 'product' table
        $products = [
            [
                'name' => 'Vas Bunga Corak',
                'price' => 40000,
                'description' => 'Vas bunga motif marble dengan diameter 10 cm',
                'color' => '666B6F',
                'image' => 'product_1.svg',
                'stock' => 10,
            ],
            [
                'name' => 'Vas Bunga Tabung',
                'price' => 25000,
                'description' => 'Vas bunga motif bintik dengan diameter 10 cm',
                'color' => 'EBEEEB',
                'image' => 'product_2.svg',
                'stock' => 10,
            ],
            [
                'name' => 'Vas Bunga Cembung',
                'price' => 50000,
                'description' => 'Vas bunga motif bintik dengan diameter 12 cm',
                'color' => 'EBEEEB',
                'image' => 'product_3.svg',
                'stock' => 10,
            ],
            [
                'name' => 'Vas Bunga Panjang',
                'price' => 60000,
                'description' => 'Vas bunga terakota dengan diameter 20 cm',
                'color' => 'E4996D',
                'image' => 'product_4.svg',
                'stock' => 10,
            ],
            [
                'name' => 'Vas Bunga Mini',
                'price' => 45000,
                'description' => 'Vas bunga berukir dengan ukuran diameter 15 cm',
                'color' => '9B7354',
                'image' => 'product_5.svg',
                'stock' => 10,
            ],
            [
                'name' => 'Vas Bunga Panjang',
                'price' => 50000,
                'description' => 'Vas bunga berukir dengan ukuran diameter 20 cm',
                'color' => '6392BC',
                'image' => 'product_6.svg',
                'stock' => 10,
            ],
            [
                'name' => 'Vas Bunga Kerucut',
                'price' => 45000,
                'description' => 'Vas bunga terakota dengan diameter 20 cm',
                'color' => 'E4996D',
                'image' => 'product_7.svg',
                'stock' => 10,
            ],
            [
                'name' => 'Vas Bunga Gelas',
                'price' => 35000,
                'description' => 'Vas bunga motif bintik dengan diameter 12 cm',
                'color' => 'EBEEEB',
                'image' => 'product_8.svg',
                'stock' => 10,
            ],
            [
                'name' => 'Vas Bunga Corak',
                'price' => 25000,
                'description' => 'Vas bunga motif marble dengan diameter 10 cm',
                'color' => '666B6F',
                'image' => 'product_9.svg',
                'stock' => 10,
            ],
        ];

        // Loop through each product data and create a new product
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
