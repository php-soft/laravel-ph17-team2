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
    
    public function ShopProduct()
    {
        return $this->belongsTo('App\ShopProduct');
    }
}
