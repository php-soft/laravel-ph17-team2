<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abuses extends Model
{
    public $timestamp = true;

    protected $fillable = [
        'id',
        'content',
        'user_id',
        'shop_user_id'
    ];


}
