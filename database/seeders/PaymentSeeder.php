<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment = new Payment();
        $payment->setAttribute('desc', 'Test Payment 1');
        $payment->save();

        $payment = new Payment();
        $payment->setAttribute('desc', 'Test Payment 2');
        $payment->save();
    }
}
