<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $fillable = [
        'name',
        'alias'
    ];
    
    public function newItem()
    {
        return $this->hasMany('App\NewItem');
    }
}
