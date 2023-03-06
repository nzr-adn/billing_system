<?php

namespace App\Repository;

use App\Models\ProductType;

class ProductTypeRepository extends BaseRepository
{
    protected $model;

    public function __construct(ProductType $model)
    {
        parent::__construct($model);
    }
}
