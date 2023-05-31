<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ["code", "description", "bar_code", "sale_value", "gross_weight", "net_weight"];
}