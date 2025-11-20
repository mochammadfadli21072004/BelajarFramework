<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
    'name',
     'stock',
     'brand',
     'buy_price',
     'sale_price',
     'comment',
     ];

     protected $primaryKey = 'products_id';

    protected $table = 'products';

}
