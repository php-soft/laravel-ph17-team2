<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class abuse extends Model
{
    protected $fillable = ['content','id','user_id','shop_product_id'];
    public $timestamps = true;
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function shop_product(){
        return $this->belongsTo('App\Shop_product');
    }
}
