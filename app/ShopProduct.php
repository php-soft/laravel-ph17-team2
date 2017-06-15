<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopProduct extends Model
{
    protected $table = 'shop_products';

    public $timestamp = true;

    protected $fillable = [
        'id',
        'quantity',
        'buys',
        'price',
        'discount',
        'user_id',
        'product_id',
        'shop_id',
    ];
}
