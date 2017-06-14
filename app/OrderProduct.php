<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    public $timestamp = true;

    protected $fillable = [
        'id',
        'quantity',
        'price',
        'order_id',
        'shop_product_id',
    ];

    public function orders()
    {
        return $this->belongsTo('App\OrderProduct');
    }
}
