<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = ['id','status','total_price','phone','address','shipping_name','shipping_address','shipping_phone','name','voucher_code'];
    public $timestamps = true;
    public function order_product(){
        return $this->hasMany('App\order_product');
    }
}
