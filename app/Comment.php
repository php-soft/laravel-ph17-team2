<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
<<<<<<< HEAD
    protected $fillable = ['id', 'comments', 'name', 'news_id', 'status'];

    public function newItem()
    {
        return $this->belongsTo('App\NewItem');
=======
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
>>>>>>> 1b495ee23b85b6a1fce1e9822314725a476ccb33
    }
}
