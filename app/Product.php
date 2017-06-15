<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'buys',
        'name',
        'description',
        'image',
        'price',
        'category_id',
        'alias'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function productAttributeValues()
    {
        return $this->hasMany('App\ProductAttributeValue');
    }
}
