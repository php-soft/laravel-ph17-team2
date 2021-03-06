<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    public $timestamp = true;

    protected $fillable = [
        'id',
        'name'
    ];

    public function usersRoles()
    {
        return $this->hasMany('App\UsersRole');
    }
}
