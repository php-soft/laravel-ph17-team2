<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Cart;
use Carbon\Carbon;
use Input;

class ProductController extends Controller
{
    public function index()
    {
        $products = \App\Product::all();
        return view('admin.products.index')->with('products', $products);
    }

    public function productDetail($shopProductId)
    {
        $shopProduct = \App\ShopProduct::find($shopProductId);
        $category = $shopProduct->product->category;
        return view('productDetail')
            ->with('shopProduct', $shopProduct)
            ->with('category', $category);
    }

    public function create()
    {
        $categories = \App\Category::pluck('name', 'id', 'parent_id');
        $user = Auth::user();
        $shop = $user->shops->first();
        return view('productCreate')
        ->with('categories', $categories)
        ->with('user', $user)
        ->with('shop', $shop);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category_id' => 'required|numeric|exists:categories,id',
            'shop_id' => 'required|numeric|exists:shops,id',
            // 'image' => 'image|mimes:jpeg,jpg,png | max:1000',
            'buys' => 'numeric',
            'image' => 'required',
            'alias' => 'required|max:255',
            'user_id' => 'required|numeric|exists:users,id',
            'discount' => 'required|numeric'
        ]);
        $data = $request->except('quantity', 'shop_id', 'user_id', 'discount', 'buys');
        // $file = $request->file('photo');
        // if (!empty($file)) {
        //     $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
        //     $file->move('upload', $data['image']);
        // } else {
        //     $data['image'] = 'default.jpg';
        // }
        $product = \App\Product::create($data);
        $dt = $request->except('description', 'category_id', 'image', 'alias', 'name');
        $shopProduct = \App\ShopProduct::create($dt);
        $shopProduct['product_id'] = $product->id;
        return redirect()->route('adminProduct');
    }
}
