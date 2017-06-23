<?php

namespace App\Http\Controllers;

use Request;
use Cart;

class OrderController extends Controller
{
    public function datHang()
    {
        $content =Cart::content();
        $total=cart::total();
        return view('checkout')->with('content', $content)->with('total', $total);
    }
}
