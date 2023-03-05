<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoice = new Invoice();
        $invoice->setAttribute('desc', 'Test Invoice 1');
        $invoice->save();

        $invoice = new Invoice();
        $invoice->setAttribute('desc', 'Test Invoice 2');
        $invoice->save();
    }
}
