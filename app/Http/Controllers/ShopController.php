<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\User;

class ShopController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('shop')->with('user', $user);
    }

    public function create($id)
    {
        return view('shopCreate');
    }
}
