<?php

namespace App\Http\Controllers;

use Request;
use Cart;

class CartController extends Controller
{
    public function store($id)
    {
        if (Request::ajax()) {
            $productBuy=\App\ShopProduct::where('id', $id)->first();
            Cart::add(['id' =>$productBuy->product->id, 'name' =>$productBuy->product->name, 'qty' => 1, 'price' =>
            $productBuy->product->price]);
            return "oke";
        };
    }

    public function show()
    {
        $content=Cart::content();
        $total=Cart::total();
        return view('shopping_cart')->with('content', $content)->with('total', $total);
    }

    public function delete($rowId)
    {
        Cart::remove($rowId);
        return redirect('cart/show')->withSuccess('Cat has been updated.');
    }

    public function update()
    {
        if (Request::ajax()) {
            $id=Request::get('id') ;
            $qty=Request::get('qty') ;
            Cart::update($id, $qty);
        }
    }
}
