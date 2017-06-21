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

    public function showProduct($productId, $shopProductId)
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
