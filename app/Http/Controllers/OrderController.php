<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Request;
use Cart;
use Input;
use App\Order;
use App\OrderProduct;

class OrderController extends Controller
{
    public function show()
    {
        $order = \App\Order::pluck('name', 'id', 'phone', 'address', 'shipping_name',
            'shipping_address', 'shipping_phone', 'voucher_code');
        $content =Cart::content();
        $total=cart::total();
        return view('order/checkout')->with('content', $content)->with('total', $total)->with('order', $order);
    }

    public function store(Request $request)
    {
        $Order = new Order;
        $total=Cart::total();
        if (Auth::check()) {
            $Order->name = Auth::user()->name;
            $Order->phone = Auth::user()->profile['phone'];
            $Order->address = Auth::user()->profile['address'];
            }
        else {
            $Order->name = Input::get('name');
            $Order->phone = Input::get('phone');
            $Order->address = Input::get('address');
             }
            $Order->shipping_address 	= Input::get('shipping_address');
            $Order->shipping_name 		= Input::get('shipping_name');
            $Order->shipping_phone 	= Input::get('shipping_phone');
            $Order->voucher_code 	= Input::get('voucher_code');
            $Order->status 	= 0;
            $Order->total_price 	= $total;
            $Order->save();
            $content =Cart::content();
        $OrderProduct = new OrderProduct; 
        foreach ($content as $contents){
            $OrderProduct->quantity=$contents->qty;
            $OrderProduct->price=$contents->price;
            $OrderProduct->order_id=$Order->id;
            $OrderProduct->product_id=$contents->id;
            $OrderProduct->save();
        }
        Cart::destroy();
        return redirect('home')
            ->withSuccess('Cat has been updated.');
    }
}

