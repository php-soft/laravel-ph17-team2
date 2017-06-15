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

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }

    public function orderProduct()
    {
        return $this->hasMany('App\OrderProduct');
    }

    public function returnItem()
    {
        return $this->hasMany('App\ReturnItem');
    }

    public function review()
    {
        return $this->hasMany('App\Review');
    }

    public function abuse()
    {
        return $this->hasMany('App\Abuse');
    }
}
