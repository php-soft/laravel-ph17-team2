<?php

namespace App\Http\Controllers;

use Request;
use Cart;

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

    public function muaHang($id){
        if (Request::ajax()){
            $product_buy=\App\ShopProduct::where('id', $id)->first();
            $attributes = $product_buy->product->productAttributeValues;
            Cart::add(['id' =>$product_buy->product->id, 'name' =>$product_buy->product->name, 'qty' => 1, 'price' =>
            $product_buy->product->price]);
            $content=Cart::content();
        };
    }

    public function gioHang()
    {
        $content=Cart::content();
        $total=Cart::total();
        return view('shopping_cart')->with('content', $content)->with('total', $total);
    }

    public function xoaGioHang($rowId)
    {
        Cart::remove($rowId);
        return redirect('gio-hang')->withSuccess('Cat has been updated.');
    }

    public function editGioHang(){
        if (Request::ajax())
        {
            $id=Request::get('id') ;
            $qty=Request::get('qty') ;
            Cart::update($id, $qty);
        }
    }
}
