<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnItem extends Model
{
    protected $table = 'return_items';

    public $timestamp = true;

    protected $fillable = [
        'id',
        'user_id',
        'shop_product_id',
        'content'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function shopProduct()
    {
        return $this->belongsTo('App\ShopProduct');
    }
}
