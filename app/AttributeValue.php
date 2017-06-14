<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected $fillable = [
        'name',
        'description',
        'attribute_id'
    ];

    public function attribute()
    {
        return $this->belongsTo('App\Attribute');
    }

    public function productAttributeValues()
    {
        return $this->hasMany('App\ProductAttributeValue');
    }

    public function categoryAttributeValues()
    {
        return $this->hasMany('App\CategoryAttributeValue');
    }
}
