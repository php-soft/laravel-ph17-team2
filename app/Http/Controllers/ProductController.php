<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ProductController extends Controller
{
    public function productDetail($shopProductId)
    {
        $shopProduct = \App\ShopProduct::find($shopProductId);
        $category = $shopProduct->product->category;
        return view('productDetail')
            ->with('shopProduct', $shopProduct)
            ->with('category', $category);
    }

    public function create(Request $request)
    {	
        if ($request ->user()) {
            $categories = \App\Category::pluck('name', 'id', 'parent_id');
            $user = Auth::user();
            return view('productCreate')
            ->with('categories', $categories)
            ->with('user', $user);
        }
    	// $mainParentIds = \App\Category::where('parent_id', '=', 0)->get();
    	
    	// foreach($mainParentIds as $mainParentId) 
    	// {
    	// 	$parentId[] = $mainParentId->id;
    	// }
    	// foreach($parentId as $key)
    	// {
    	// 	$subCategories = $subCategories->where('parent_id', '>', 0)->where('parent_id', '<>', $key);
    	// }
        // foreach($parentId as $key)
        // {
    	   // $categories = $categories->where('parent_id', '=', 1)->pluck('name', 'id', 'parent_id');
        // }
        // dd($categories);
    }
}
