<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];
    
    public function attributeValues()
    {
        return $this->hasMany('App\AttributeValues');
    }
}
