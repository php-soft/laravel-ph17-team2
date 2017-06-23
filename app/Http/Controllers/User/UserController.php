<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Profile;
use DB;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
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
