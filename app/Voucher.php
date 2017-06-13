<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = ['discount','code','quantily','start_time','end_time','shop_id'];
    public function shop_product(){
    	return $this->belongsTo('App\Shop_Product');
    }
}
