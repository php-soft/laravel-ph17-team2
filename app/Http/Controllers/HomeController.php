<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $shopProducts = \App\ShopProduct::all();
        return view('home')->with('shopProducts', $shopProducts);
    }
}
