<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishlistItem extends Model
{
    protected $table = 'wishlist_items';
    public $timestamp = true;
    protected $fillable = [
        'id',
        'product_id',
        'user_id',
    ];

}
