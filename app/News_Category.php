<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News_Category extends Model
{
	public $timestamp = false;

    protected $fillable = [
	    'type',
	    'alias'
    ];
    
    public function news()
    {
    	return $this->hasMany('App\News');
    }
}
