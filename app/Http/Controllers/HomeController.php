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

    public function shop()
    {
        $shops = \App\Shop::all();
        return view('shop')->with('shops', $shops);
    }

    public function shopProduct($name)
    {
        $shop = \App\Shop::where('name', '=', $name)->get()->first();
        $shopProducts = $shop->shopProducts;
        return view('shopProduct')
            ->with('shopProducts', $shopProducts)
            ->with('shop', $shop);
    }

    public function productDetail($shopProductId)
    {
        $shopProduct = \App\ShopProduct::find($shopProductId);
        return view('product')
            ->with('shopProduct', $shopProduct);
    }
}
