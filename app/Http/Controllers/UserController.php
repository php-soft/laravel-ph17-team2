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

    public function edit()
    {
    }

    public function update()
    {
    }
}
