<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->setAttribute('name', 'Product 1');
        $product->setAttribute('speed', 20);
        $product->setAttribute('product_type_id', 1);
        $product->setAttribute('price', 23000);
        $product->save();

        $product = new Product();
        $product->setAttribute('name', 'Product 2');
        $product->save();
    }
}
