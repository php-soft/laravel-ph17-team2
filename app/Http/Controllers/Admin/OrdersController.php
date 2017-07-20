<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Request;
use App\Http\Controllers\Controller;
use DB;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = \App\Order::Paginate(10);
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

    public function edit($id, $status)
    {
        if (Request::ajax()) {
            $orders = \App\Order::find($id);
            $orders->status = $status;
            $orders->user_check = Auth::user()->id;
            $orders->save();
            return response()->json(['status' => $orders->status]);
        }
    }

    public function destroy($id)
    {
        $orders = \App\Order::find($id);
        $orders->delete();
        return redirect('admin/orders')
            ->withSuccess('Orders has been delete.');
    }

    public function withtrashed()
    {
        $orders =  \App\Order::onlyTrashed()->Paginate(10);
        return view('admin/orders/withtrash')->with('orders', $orders);
    }

    public function showWithtrashed($id)
    {
        $orders = \App\Order::onlyTrashed($id)->find($id);
        $status = $orders->status;
        $total_amount = 0;
        foreach ($orders->orderProducts as $product) {
            $amount = $product->price*$product->quantity;
            $total_amount = $amount + $total_amount;
        }
        $users = DB::table('orders')->join('users', 'users.id', '=', 'orders.user_id')
            ->join('profiles', 'users.id', '=', 'profiles.user_id')->where('users.id', '=', $id)->get();
        return view('admin/orders/showwithtrash')->with('orders', $orders)->with('users', $users)
            ->with('status', $status)->with('total_amount', $total_amount);
    }
}
