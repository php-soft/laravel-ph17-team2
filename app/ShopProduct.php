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

    public function orderProducts()
    {
        return $this->hasMany('App\OrderProduct');
    }

    public function returnItems()
    {
        return $this->hasMany('App\ReturnItem');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function abuses()
    {
        return $this->hasMany('App\Abuse');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
