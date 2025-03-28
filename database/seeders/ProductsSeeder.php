<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Teddy Bear',
                'price' => 30,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae12942ca03553bf0d536c_33903-2-plush-toy-transparent-image-min.png',
                'category_id' => 1,
                'description' => 'A soft and cuddly teddy bear.',
                'quantity' => 50
            ],
            [
                'product_name' => 'Mega Plush Toy',
                'price' => 38,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae124e03ef144f2b4a9bef_33837-2-plush-toy-transparent-background-min.png',
                'category_id' => 1,
                'description' => 'A large plush toy with a cute design.',
                'quantity' => 40
            ],
            [
                'product_name' => 'Cute Dog',
                'price' => 24,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae0f7a1f2da258291736c4_33908-7-plush-toy-file-min.png',
                'category_id' => 1,
                'description' => 'A fluffy dog toy in a hoodie.',
                'quantity' => 45
            ],
            [
                'product_name' => 'Little Friend',
                'price' => 27,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae0f1835e11376299a8089_33878-5-plush-toy-transparent-min.png',
                'category_id' => 1,
                'description' => 'A colorful plush animal with a mini friend.',
                'quantity' => 35
            ],
            [
                'product_name' => 'Happy Flower',
                'price' => 38,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf529c7a16ad5b5fd9fdf3_33727-9-wooden-toy-transparent-image-min.png',
                'category_id' => 2,
                'description' => 'A wooden puzzle flower toy.',
                'quantity' => 30
            ],
            [
                'product_name' => 'Lift Machine',
                'price' => 24,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf525bbf02340f30398cb3_33505-6-wooden-toy-clipart-min.png',
                'category_id' => 2,
                'description' => 'A wooden crane lift machine toy.',
                'quantity' => 25
            ],
            [
                'product_name' => 'Wooden Camera',
                'price' => 32,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf522457091399591a83fe_33631-9-wooden-toy-photo-min.png',
                'category_id' => 2,
                'description' => 'A wooden camera toy for kids.',
                'quantity' => 20
            ],
            [
                'product_name' => 'Little Rabbit',
                'price' => 16,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf51fc570913c1d31a83f6_33504-4-wooden-toy-transparent-min.png',
                'category_id' => 2,
                'description' => 'A stackable wooden rabbit toy.',
                'quantity' => 30
            ],
        ]);
    }
}
