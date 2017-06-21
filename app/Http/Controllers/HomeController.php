<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = \App\Product::all();
        return view('home')->with('products', $products);
    }

    public function showProduct($id)
    {
        $product = \App\Product::find($id);
        $shops = DB::table('products')
            ->leftJoin('shop_products', 'products.id', '=', 'shop_products.product_id')
            ->join('shops', 'shop_products.shop_id', '=', 'shops.id')
            ->where('products.id', '=', $id)
            ->select('shops.*')
            ->get();
        $shop_products = DB::table('products')
            ->leftJoin('shop_products', 'products.id', '=', 'shop_products.product_id')
            ->where('products.id', '=', $id)
            ->select('shop_products.quantity')
            ->get();
        $attributes = DB::table('products')
            ->leftJoin('product_attribute_values', 'products.id', '=', 'product_attribute_values.product_id')
            ->where('products.id', '=', $id)
            ->select('product_attribute_values.value')
            ->get();
        return view('product')
            ->with('shops', $shops)
            ->with('product', $product)
            ->with('attributes', $attributes)
            ->with('shop_products', $shop_products);
    }
}
