<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->setAttribute('name', 'Customer 1');
        $customer->save();

        $customer = new Customer();
        $customer->setAttribute('name', 'Customer 2');
        $customer->save();
    }
}
