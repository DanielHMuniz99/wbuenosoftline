<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends AbstractRepository
{
    protected $model = Product::class;
}