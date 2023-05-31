<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository extends AbstractRepository
{
    protected $model = Customer::class;
}