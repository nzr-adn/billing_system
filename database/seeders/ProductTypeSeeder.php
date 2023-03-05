<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_type = new ProductType();
        $product_type->setAttribute('name', 'Internet Broadband 1');
        $product_type->save();

        $product_type = new ProductType();
        $product_type->setAttribute('name', 'Internet Broadband 2');
        $product_type->save();
    }
}
