<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->truncate();
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
                'product_name' => 'Christmas Deer',
                'price' => 19,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae0ede56ac5481f54e12e9_33610-4-plush-toy-hd-min-p-500.png',
                'category_id' => 1,
                'description' => 'A soft and cuddly teddy bear.',
                'quantity' => 50
            ],
            [
                'product_name' => 'Pluto Yellow Dog',
                'price' => 28,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae0e6335e113da999a7976_33568-4-toy-image-min-p-500.png',
                'category_id' => 1,
                'description' => 'A large plush toy with a cute design.',
                'quantity' => 40
            ],
            [
                'product_name' => 'Grey Elephant',
                'price' => 45,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae0db61f2da2a4ef173617_cute-plush-toy-stuffed-animal-47335-min-p-500.png',
                'category_id' => 1,
                'description' => 'A fluffy dog toy in a hoodie.',
                'quantity' => 45
            ],
            [
                'product_name' => 'Funny Clown',
                'price' => 36,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae0d07939555eac3b8a91c_33910-6-toy-clipart-min.png',
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
            [
                'product_name' => 'Rainbow Truck',
                'price' => 28,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf51b7c8d851a73cc4544c_33649-6-toy-transparent-image-min-p-500.png',
                'category_id' => 2,
                'description' => 'A soft and cuddly teddy bear.',
                'quantity' => 50
            ],            
            [
                'product_name' => 'Happy Dog',
                'price' => 30,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf5171ace69cb064b33d42_33388-1-wooden-toy-photos-min-p-500.png',
                'category_id' => 2,
                'description' => 'A large plush toy with a cute design.',
                'quantity' => 40
            ],
            [
                'product_name' => 'Caterpillar',
                'price' => 18,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf50843a685ea7dfd6e4fd_33371-3-wooden-toy-min-p-500.png',
                'category_id' => 2,
                'description' => 'A fluffy dog toy in a hoodie.',
                'quantity' => 45
            ],
            [
                'product_name' => 'Wooden Tractor',
                'price' => 22,
                'image_link' => 'https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf5100ace69c1b26b33d2d_33476-9-wooden-toy-hd-min-p-800.png',
                'category_id' => 2,
                'description' => 'A colorful plush animal with a mini friend.',
                'quantity' => 35
            ],
        ]);
    }
}
