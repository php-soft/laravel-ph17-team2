<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
       'name',
       'logo',
       'address',
       'description',
       'user_id'
    ];
    
    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function shopProducts()
    {
        return $this->hasMany('App\ShopProduct');
    }

    public function vouchers()
    {
        return $this->hasMany('App\Vouchers');
    }
}
