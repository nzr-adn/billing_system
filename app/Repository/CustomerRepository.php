<?php

namespace App\Repository;

use App\Models\Customer;

class CustomerRepository extends BaseRepository
{
    protected $model;

    public function __construct(Customer $model)
    {
        parent::__construct($model);
    }
}
