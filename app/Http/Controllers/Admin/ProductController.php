<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Input;
use DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $shopProducts = \App\ShopProduct::all();
        return view('admin.products.index')->with('shopProducts', $shopProducts);
    }

    public function create()
    {
        $categories = \App\Category::where('parent_id', '<>', 0)->pluck('name', 'id', 'parent_id');
        $user = Auth::user();
        $shop = $user->shops->first();
        return view('admin.products.create')
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
        $dt['product_id'] = $product->id;
        $shopProduct = \App\ShopProduct::create($dt);
        return redirect()->route('adminProduct');
    }
}
