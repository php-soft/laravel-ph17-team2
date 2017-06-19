<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryAttributeValue extends Model
{
    protected $fillable = [
        'category_id',
        'attribute_value_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function productAttributeValues()
    {
        return $this->hasMany('App\CategoryAttributeValue');
    }
}
