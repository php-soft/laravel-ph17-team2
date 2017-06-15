<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = [
       'discout',
       'code',
       'quantily',
       'start_date',
       'end_date',
       'shop_id'
    ];
    
    public function Shop_Product()
    {
        return $this->belongsTo('App\Shop_Product');
    }
}