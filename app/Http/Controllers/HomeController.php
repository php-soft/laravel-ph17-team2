<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $shopProducts = \App\ShopProduct::all()->take(4);
        return view('home')->with('shopProducts', $shopProducts);
    }
}
