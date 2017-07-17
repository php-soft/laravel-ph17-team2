<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $shopProducts = \App\shopProduct::orderBy('id', 'DESC')
            ->take(4)
            ->get();
        $sp = \App\shopProduct::orderBy('buys', 'DESC')
            ->take(4)
            ->get();
        return view('/home')
            ->with('shopProducts', $shopProducts)
            ->with('sp', $sp);
    }

    public function search(Request $req)
    {
        $products = \App\Product::where('name', 'Like', '%' . $req->key . '%')
            ->get();
        return view('search')
            ->with('products', $products);
    }
}
