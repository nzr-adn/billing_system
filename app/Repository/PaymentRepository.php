<?php

namespace App\Repository;

use App\Models\Payment;

class PaymentRepository extends BaseRepository
{
    protected $model;

    public function __construct(Payment $model)
    {
        parent::__construct($model);
    }
}
