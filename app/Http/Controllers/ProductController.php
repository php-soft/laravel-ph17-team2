<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Cart;

class ProductController extends Controller
{
    public function productDetail($shopProductId)
    {
        $shopProduct = \App\ShopProduct::find($shopProductId);
        $category = $shopProduct->product->category;
        return view('productDetail')
            ->with('shopProduct', $shopProduct)
            ->with('category', $category);
    }

    public function create()
    {
        $categories = \App\Category::pluck('name', 'id', 'parent_id');
        $user = Auth::user();
        $shop = $user->shops->first();
        return view('productCreate')
        ->with('categories', $categories)
        ->with('user', $user)
        ->with('shop', $shop);
    }
}
