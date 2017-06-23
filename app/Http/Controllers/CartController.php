<?php

namespace App\Http\Controllers;

use Request;
use Cart;

class CartController extends Controller
{
    public function muaHang($id)
    {
        if (Request::ajax()) {
            $productBuy=\App\ShopProduct::where('id', $id)->first();
            Cart::add(['id' =>$productBuy->product->id, 'name' =>$productBuy->product->name, 'qty' => 1, 'price' =>
            $productBuy->product->price]);
            return "oke";
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

    public function editGioHang()
    {
        if (Request::ajax()) {
            $id=Request::get('id') ;
            $qty=Request::get('qty') ;
            Cart::update($id, $qty);
        }
    }
}


