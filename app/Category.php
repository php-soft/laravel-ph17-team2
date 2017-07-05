<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nestable\NestableTrait;

class Category extends Model
{
    use NestableTrait;

    protected $parent = 'parent_id';
    
    public $timestamp = false;

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'description'
    ];

    public static function getCategoriesByParent($parent_id)
    {
        return Category::where('parent_id', '=', $parent_id)->get();
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function categoryAttributeValues()
    {
        return $this->hasMany('App\CategoryAttributeValue');
    }
}
