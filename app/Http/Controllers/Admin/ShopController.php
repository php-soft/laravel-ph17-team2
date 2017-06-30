<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shop;
use App\User;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::All();
        return view('admin.shop.index')->with('shops', $shops);
    }

    public function user()
    {
        $users = User::All();
        return view('admin.shop.userShop')->with('users', $users);
    }
}
