<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewItem extends Model
{
    protected $table = 'news';

    public $timestamp = true;

    protected $fillable = [
        'id',
        'title',
        'description',
        'content',
        'image',
        'views',
        'user_id',
        'news_category_id',
        'alias'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function newsCategory()
    {
        return $this->belongsTo('App\NewsCategory');
    }

    public function commentPost()
    {
        return $this->hasMany('App\CommentPost');
    }

    public function newImages()
    {
        return $this->hasMany('App\NewImage');
    }
}
