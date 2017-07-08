<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Cart;
use Input;
use App\Order;
use App\OrderProduct;
use Validate;
use Illuminate\Http\Request;
use App\Mail\OrderShipped;

class OrderController extends Controller
{
    public function show()
    {
        $order = \App\Order::pluck(
            'name',
            'id',
            'phone',
            'address',
            'shipping_name',
            'shipping_address',
            'shipping_phone',
            'voucher_code'
        );
        $content = Cart::content();
        $subtotal = Cart::subtotal();
        return view('order/checkout')
            ->with('content', $content)
            ->with('subtotal', $subtotal)
            ->with('order', $order);
    }


    public function store(Request $request)
    {
            $error ='';
            $this->validate($request, [
                'name' => 'required|max:100',
                'address' => 'required|max:255',
                'phone' => 'required|max:20',
                'shipping_name' => 'required|max:100',
                'shipping_address' => 'required|max:255',
                'email' => 'required|email|max:255',
                'shipping_phone' => 'required|max:20',
            ], [
                'name.required' => 'Bạn phải điền tên',
                'name.max' => 'Bạn không được quá 100 kí tự',
                'address.required' => 'Bạn phải điền đia chỉ',
                'address.max' => 'Bạn không được quá 255 kí tự',
                'phone.required' => 'Bạn phải điền số điên thoại',
                'phone.max' => 'Bạn không được quá 20 kí tự',
                'email.required' => 'Bạn phải điền số email',
                'email.max' => 'Bạn không được quá 255 kí tự',
                'email.email' => 'Bạn phải điền đúng định dạng của email',
                'shipping_name.required' => 'Bạn phải điền tên người nhận',
                'shipping_name.max' => 'Bạn không được quá 100 kí tự',
                'shipping_address.required' => 'Bạn phải điền đia chỉ người nhận',
                'shipping_address.max' => 'Bạn không được quá 255 kí tự',
                'shipping_phone.required' => 'Bạn phải điền số điện thoại người nhận',
                'shipping_phone.max' => 'Bạn phải điền số điên thoại',
            ]);

        $subtotal=Cart::subtotal(0, '', '');
        $Order = new Order;
        if (Auth::check()) {
            $Order->name = Input::get('name');
            $Order->phone = Input::get('phone');
            $Order->address = Input::get('address');
            $Order->email = Input::get('email');
        } else {
            $Order->name = Input::get('name');
            $Order->phone = Input::get('phone');
            $Order->address = Input::get('address');
            $Order->email = Input::get('email');
        }

        $Order->shipping_address = Input::get('shipping_address');
        $Order->shipping_name = Input::get('shipping_name');
        $Order->shipping_phone = Input::get('shipping_phone');
        $Order->voucher_code = Input::get('voucher_code');
        $Order->status = 0;
        $Order->total_price = $subtotal;
        $Order->save();
        $content =Cart::content();
        $OrderProduct = new OrderProduct;


        Mail::to($request->email)->send(new OrderShipped($Order));

        $voucher = \App\Voucher::all();
        foreach ($content as $contents) {
            $OrderProduct = new OrderProduct;
            $OrderProduct->quantity = $contents->qty;
            if (Input::get('voucher_code') != null) {
                foreach ($voucher as $vouchers) {
                    if (Input::get('voucher_code') == $vouchers->code
                        and $vouchers->shop->name === $contents->options->shop ) {
                        if ($vouchers->quantity == 0) {
                            $OrderProduct->price = $contents->price;
                        } else {
                            $OrderProduct->price = $contents->price * ((100 - $vouchers->discount) / 100);
                            $vouchers->quantity = $vouchers->quantity - 1;
                            $vouchers->save();
                        }
                    } else{
                        $OrderProduct->price = $contents->price;
                    }
                }
            } else {
                $OrderProduct->price = $contents->price;
            }
            $OrderProduct->order_id = $Order->id;
            $OrderProduct->product_id = $contents->id;
            $OrderProduct->order_id = $Order->id;
            $OrderProduct->save();
            Cart::destroy();
        }
        return redirect('home')
            ->withSuccess('Cảm ơn bạn đã xác nhận đặt hàng.');
    }

    public function activateOrder($id)
    {
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        return redirect('home')
            ->withSuccess('Cảm ơn bạn đã xác nhận đặt hàng.');
    }
}
