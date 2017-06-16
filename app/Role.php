<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];
    public function userRoles()
    {
    	return $this->hasMany('App\UserRole');
    }
}
