<?php

namespace App\Http\Controllers;

use Input;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
    	$users = User::all();
    	return view('user.index')->with('users',$users);
    }
    public function destroy(User $user){
    	$user->delete();
    	return redirect('manager-user');
    }
    public function edit(User $user){
    	return view('user.edit')->with('user',$user);
    }
    public function update(User $user){
        $user->update(Input::all());
        return redirect('manager-user');
    }
}
