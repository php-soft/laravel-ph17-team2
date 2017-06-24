<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->select('id','name','image','price')->orderBy('id','DESC')->skip(0)->limit(2)->get();
        
        $sp = DB::table('products')->select('id','name','image','price','buys')->orderBy('buys','DESC')->limit(2)->get();
        
        return view('home',compact('products','sp'));
    }
}
