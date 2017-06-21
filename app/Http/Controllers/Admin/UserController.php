<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Input;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index')->with('users', $users);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('admin/user');
    }

    public function edit(User $user)
    {
        return view('user.edit')->with('user', $user);
    }

    public function update(User $user)
    {
        $user->update(Input::all());
        return redirect('admin/user');
    }
}
