<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $shopProducts = \App\shopProduct::orderBy('id', 'DESC')
            ->take(3)
            ->get();
        $sp = \App\shopProduct::orderBy('buys', 'DESC')
            ->take(3)
            ->get();
        return view('home')
            ->with('shopProducts', $shopProducts)
            ->with('sp', $sp);
    }
}
