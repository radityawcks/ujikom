<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        Product::create([
            "name" => "Product 1",
            "description"=> "Deskripsi Product",
            "sku"=>"12345-ok",
            "price"=> 10000,
            "stok" => 100,
            "category_id" => 1,
        ]);
    }
}
