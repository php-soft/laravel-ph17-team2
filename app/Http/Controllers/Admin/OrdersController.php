<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = \App\Order::all();
        return view('admin.orders.index')->with('orders', $orders);
    }
}
