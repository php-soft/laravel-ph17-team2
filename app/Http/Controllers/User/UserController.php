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
        $phoneProfile = $user->Profile->adress;
        echo $phoneProfile;
        return view('profile.index')->with('user', $user)->with('phoneProfle', $phoneProfile);
    }

    public function showuser(){
        return view('profile.showuser')->with('users', $users);	
    }

    public function information()
    {
        return view('profile.information');
    }

}
