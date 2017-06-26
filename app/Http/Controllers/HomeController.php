<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
       
        $products = DB::table('products')
         	->select('id', 'name', 'image', 'price')
            ->orderBy('id', 'DESC')
            ->limit(3)
            ->get();
          $sp = DB::table('products')
            ->select('id', 'name', 'image', 'price', 'buys')
            ->orderBy('buys', 'DESC')
            ->take(3)
            ->get();
        return view('home', compact('products', 'sp'));
    }
}
    