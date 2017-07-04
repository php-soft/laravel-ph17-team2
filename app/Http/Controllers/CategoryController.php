<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function show($id)
    {
        $categories = \App\Product::where('category_id', $id)
            ->get();    
        return view('categories')    	
        ->with('categories', $categories);
    }
}
