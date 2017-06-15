<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
       'user_id',
       'shop_product_id',
       'status',
       'content'       
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function shopProduct()
    {
    	return $this->belongsTo('App\shopProduct');
    }
}
