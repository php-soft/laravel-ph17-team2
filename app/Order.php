<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';


    public $timestamp = true;


    protected $fillable = [
        'id',
        'status',
        'total_price',
        'phone',
        'address',
        'shipping_name',
        'shipping_address',
        'shipping_phone',
        'name',
        'voucher_code'
    ];


    public function orderProduct()
    {
        return $this->hasMany('App\OrderProduct');
    }
}
