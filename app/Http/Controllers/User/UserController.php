<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('profile.index')->with('user', $user);
    }

    public function showuser(){
        return view('profile.showuser')->with('users', $users);	
    }

    public function information()
    {
        return view('profile.information');
    }

}
