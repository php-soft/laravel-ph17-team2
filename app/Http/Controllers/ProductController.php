<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productDetail($shopProductId)
    {
        $shopProduct = \App\ShopProduct::find($shopProductId);
        $attributes = $shopProduct->product->productAttributeValues;
        return view('productDetail')
            ->with('shopProduct', $shopProduct)
            ->with('attributes', $attributes);
    }
}
