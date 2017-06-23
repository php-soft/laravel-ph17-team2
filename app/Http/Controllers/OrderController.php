<?php

namespace App\Http\Controllers;

use Request;
use Cart;

class OrderController extends Controller
{
    public function show()
    {
        $content =Cart::content();
        $total=cart::total();
        return view('order/gicheckout')->with('content', $content)->with('total', $total);
    }
}
