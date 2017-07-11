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
        $listProducts = $shopProduct->shop->shopProducts;
        foreach($listProducts as $listProduct) 
        {
            if($listProduct->product->category->parent_id == $shopProduct->product->category->parent_id) {
                $list[] = $listProduct;
            }
        }
        return view('productDetail')
            ->with('shopProduct', $shopProduct)
            ->with('category', $category)
            ->with('list', $list);
    }
}
