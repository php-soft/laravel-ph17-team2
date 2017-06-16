<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewImage extends Model
{
    protected $table = 'new_images';

    protected $fillable = [
        'id',
        'images',
        'thumb',
        'new_id'
    ];

    public function newItem()
    {
        return $this->belongsTo('App\NewItem');
    }
}
