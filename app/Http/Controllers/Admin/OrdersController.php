<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = \App\Order::all();
        return view('admin.orders.index')->with('orders', $orders);
    }

    public function show($id)
    {
        $orders = \App\Order::find($id);
        $status = $orders->status;
        $total_amount = 0;
        foreach ($orders->orderProducts as $product) {
            $amount = $product->price*$product->quantity;
            $total_amount = $amount + $total_amount;
        }
        $users = DB::table('orders')->join('users', 'users.id', '=', 'orders.user_id')
        ->join('profiles', 'users.id', '=', 'profiles.user_id')->where('users.id', '=', $id)->get();
        return view('admin.orders.show')->with('orders', $orders)->with('users', $users)
        ->with('status', $status)->with('total_amount', $total_amount);
    }

    public function edit(Request $request, $id)
    {
        $orders = \App\Order::findOrFail($id);
        $orders->update($request->all());
        return redirect()->route('adminOrders', ['id' => $id]);
    }
}
