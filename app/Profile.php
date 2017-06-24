<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'id',
        'date_of_birth',
        'phone',
        'address',
        'image',
        'gender',
        'user_id'
    ];

    public function user()
    {
        $this->hasOne('App\User');
    }
}
