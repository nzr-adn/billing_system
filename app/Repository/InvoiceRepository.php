<?php

namespace App\Repository;

use App\Models\Invoice;

class InvoiceRepository extends BaseRepository
{
    protected $model;

    public function __construct(Invoice $model)
    {
        parent::__construct($model);
    }
}
