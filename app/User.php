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

    public function newItems()
    {
        return $this->hasMany('App\NewItem');
    }

    public function usersRoles()
    {
        return $this->hasMany('App\UsersRole');
    }

    public function profile()
    {
        return  $this->hasOne('App\Profile');
    }

    public function wishlistItems()
    {
        return $this->hasMany('App\WishlistItem');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function abuses()
    {
        return $this->hasMany('App\Abuse');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function shopProducts()
    {
        return $this->hasMany('App\ShopProduct');
    }

    public function returnItems()
    {
        return $this->hasMany('App\ReturnItem');
    }

    public function shops()
    {
        return $this->hasMany('App\Shop');
    }
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
