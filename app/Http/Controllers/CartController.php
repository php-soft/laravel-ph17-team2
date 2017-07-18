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
                $productBuy->product->price, 'options' =>['shop'=> $productBuy->shop->name, 'shopImages'=>
                $productBuy->product->image, 'shopIID'=> $productBuy->shop->id]]);
            return response()->json(['count'=>Cart::count()]);
        };
    }

    public function storeQty($id)
    {
        if (Request::ajax()) {
            $qty=Request::get('qty') ;
            $productBuy=\App\ShopProduct::where('id', $id)->first();
            Cart::add(['id' =>$productBuy->product->id, 'name' =>$productBuy->product->name, 'qty' => $qty, 'price' =>
                $productBuy->product->price, 'options' =>['shop'=> $productBuy->shop->name, 'shopImages'=>
                $productBuy->product->image, 'shopIID'=> $productBuy->shop->id] ]);
            return response()->json(['count'=>Cart::count()]);
        };
    }

    public function show()
    {
        $content=Cart::content();
        $subtotal=Cart::subtotal();
        return view('cart/shopping_cart')->with('content', $content)->with('subtotal', $subtotal);
    }

    public function delete($rowId)
    {
        if (Request::ajax()) {
            Cart::remove($rowId);
            return response()->json([$rowId,'count'=>Cart::count()]);
        };
    }

    public function update()
    {
        if (Request::ajax()) {
            $rowID=Request::get('rowId');
            $productBuy=\App\ShopProduct::where('id', $rowID)->get() ;
            foreach ($productBuy as $productBuys) {
                $id = Request::get('id');
                $qty = Request::get('qty');
                Cart::update($id, $qty);
                return response()->json([
                $qty,
                'priceTotal' => number_format($productBuys->product->price * $qty, 0, ",", ","),
                'count' => Cart::count(),
                'total' => Cart::subtotal()]);
            }
        }
    }
}
