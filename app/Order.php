<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const STATUS_NEW = 0;
    const STATUS_CONFIRM = 1;
    const STATUS_PAYMENT = 2;
    const STATUS_SHIPPING = 3;
    const STATUS_RETURN = 4;
    const STATUS_DONE = 5;

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

    public function statusText()
    {
        if ($this->status == self::STATUS_NEW) {
            return 'New';
        } elseif ($this->status == self::STATUS_CONFIRM) {
            return "Confirm";
        } elseif ($this->status == self::STATUS_PAYMENT) {
            return "Payment";
        } elseif ($this->status == self::STATUS_SHIPPING) {
            return "Shipping";
        } elseif ($this->status == self::STATUS_RETURN) {
            return "Return";
        } elseif ($this->status == self::STATUS_DONE) {
            return "Done";
        } else {
            return 'New';
        }
    }

    public function orderProducts()
    {
        return $this->hasMany('App\OrderProduct');
    }
}
