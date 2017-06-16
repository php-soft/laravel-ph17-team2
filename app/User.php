<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function news()
    {
        return $this->hasMany('App\New');
    }
    public function usersRole()
    {
        return $this->hasMany('App\UsersRole');
    }
    public function profile()
    {
        return $this->hasMany('App\Profile');
    }
    public function wishlistItem()
    {
        return $this->hasMany('App\WishlistItem');
    }public function review()
{
    return $this->hasMany('App\Review');
}
    public function abuse()
    {
        return $this->hasMany('App\Abuse');
    }
    public function order()
    {
        return $this->hasMany('App\Order');
    }
    public function shopProduct()
    {
        return $this->hasMany('App\ShopProduct');
    }
    public function returnItem()
    {
        return $this->hasMany('App\ReturnItem');
    }
    public function shop()
    {
        return $this->hasMany('App\Shop');
    }
}
