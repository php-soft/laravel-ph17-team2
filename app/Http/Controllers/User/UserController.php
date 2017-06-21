<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('profile.manageruser');
    }

    public function information()
    {
        return view('profile.information');
    }

}
