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
        $cate = \App\Product::paginate(25);                
        return view('categories')
            ->with('categories', $categories)
            ->with('cate', $cate);
    }
}
