<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentPost extends Model
{

    protected $table = 'commentspost';
    protected $fillable = ['id', 'comments', 'name', 'news_id', 'status'];

    public function newItem()
    {
        return $this->belongsTo('App\NewItem');
    }

}
