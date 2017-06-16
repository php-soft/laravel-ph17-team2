<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsImage extends Model
{
    protected $table = 'new_images';

    protected $fillable = [
        'id',
        'images',
        'thumb',
        'new_id'
    ];

    public function news()
    {
        return $this->belongsTo('App\New');
    }
}
