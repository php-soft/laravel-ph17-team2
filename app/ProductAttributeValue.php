<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttributeValue extends Model
{
    public $timestamps = false;

    public $fillable = [
        'product_id',
        'attribute_value_id'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function attributeValue()
    {
        return $this->belongsTo('App\AttributeValue');
    }
}
