<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductsController extends Controller
{
    public function index()
    {
        $products = \App\Product::all();
        return view('admin.products.index')->with('products', $products);
    }

    public function show($id)
    {
        $product = \App\Product::find($id);
        $shops = DB::table('products')
            ->leftJoin('shop_products', 'products.id', '=', 'shop_products.product_id')
            ->join('shops', 'shop_products.shop_id', '=', 'shops.id')
            ->where('products.id', '=', $id)
            ->select('shops.*')
            ->get();
        $attributes = DB::table('products')
            ->leftJoin('product_attribute_values', 'products.id', '=', 'product_attribute_values.product_id')
            ->where('products.id', '=', $id)
            ->select('product_attribute_values.value')
            ->get();
        return view('admin.products.show')
            ->with('shops', $shops)
            ->with('product', $product)
            ->with('attributes', $attributes);
    }
}
