<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttributeValue extends Model
{
    protected $fillable = [
        'product_id',
        'category_attribute_value_id',
        'value'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function categoryAttributeValue()
    {
        return $this->belongsTo('App\CategoryAttributeValue');
    }
}
