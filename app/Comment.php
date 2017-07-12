<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'content',
        'shop_product_id'
    ];

    public function shopProduct()
    {
        return $this->belongsTo('App\ShopProduct');
    }

    public function replies()
    {
        return $this->hasMany('App\Reply');
    }
}
