<?php

namespace App\Repository;

use App\Models\ProductType;
use Illuminate\Database\Eloquent\Model;

class ProductTypeRepository extends BaseRepository
{
    protected $model;

    public function __construct(ProductType $model)
    {
        $this->model = $model;
    }
}
