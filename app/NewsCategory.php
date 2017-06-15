<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{  
    public $timestamp = false;

    protected $fillable = [
        'name',
        'alias'        
    ];

    public function news()
    {
        return $this->hasMany('App\New');
    }
}
