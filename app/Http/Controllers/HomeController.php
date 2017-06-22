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

    public function productDetail($productId, $shopProductId)
    {
        $product = \App\Product::find($productId);
        $shopProduct = \App\ShopProduct::find($shopProductId);
        $attributes = DB::table('products')
                        ->leftJoin('product_attribute_values',
                                   'product_attribute_values.product_id',
                                   '=',
                                   'products.id')
                        ->where('products.id', $productId)
                        ->select('product_attribute_values.value')
                        ->get();
        return view('product')
            ->with('product', $product)
            ->with('shopProduct', $shopProduct)
            ->with('attributes', $attributes);
    }
}
