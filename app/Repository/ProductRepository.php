<?php

namespace App\Repository;

use App\Models\Product;

class ProductRepository extends BaseRepository
{
    protected $model;

    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function paginate($perPage = 15, $columns = array('*'))
    {
        return Product::with('product_type')->paginate($perPage, $columns);
    }
}
