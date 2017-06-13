<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public $timestamps = false;

    public $fillable = [
        'name',
        'description'
    ];
    
    public function attributeValues()
    {
        return $this->hasMany('App\AttributeValues');
    }
}
