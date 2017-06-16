<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersRole extends Model
{
    protected $table = 'return_items';

    public $timestamp = true;

    protected $fillable = [
        'id',
        'user_id',
        'shop_product_id',
        'content'
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
