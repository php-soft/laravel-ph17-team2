<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryAttributeValue extends Model
{
    public $timestamps = false;

    public $fillable = [
        'category_id',
        'attribute_value_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function attributeValue()
    {
        return $this->belongsTo('App\AttributeValue');
    }
}
