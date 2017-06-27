<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Input;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('userDetail')->with('user', $user);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('editUserDetail')->with('user', $user);
    }

    public function update($id)
    {
        $user = User::find($id);
        $user->update(Input::all());
        if (empty($user->profile)) {
            $user->profile = Profile::create(Input::all());
        }else{
            $user->profile->update(Input::all());
        }
        return redirect('user/profile/'.$user->id.'/index');
    }
}
