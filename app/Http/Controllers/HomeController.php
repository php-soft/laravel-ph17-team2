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

    public function productDetail($shopProductId)
    {
        $shopProduct = \App\ShopProduct::find($shopProductId);
        $attributes = $shopProduct->product->productAttributeValues;
        return view('product')
            ->with('shopProduct', $shopProduct)
            ->with('attributes', $attributes);
    }
}
