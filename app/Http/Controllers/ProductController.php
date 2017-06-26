<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
