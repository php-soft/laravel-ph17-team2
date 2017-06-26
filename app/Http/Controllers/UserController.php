<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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

    public function update()
    {
    }
}
