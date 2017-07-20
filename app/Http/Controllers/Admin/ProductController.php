<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Input;
use DB;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index')->with('products', $products);
    }

    public function create()
    {
        $categories = Category::renderAsDropdown();
        $categories = str_replace(
            '<select  >',
            '<select id="category_id" name="category_id" class="form-control">',
            $categories
        );
        return view('admin.products.create')
        ->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'image' => 'required',
            'alias' => 'required|max:255'
        ]);
        $data = $request->all();
        $file = $request->file('image');
        $pathImage = $request->file('image')->store('upload');
        $data['image'] = $pathImage;
        Product::create($data);
        return redirect()->route('adminProduct')->withSuccess('Product has been created');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::renderAsDropdown();
        $categories = str_replace(
            '<select  >',
            '<select id="category_id" name="category_id" class="form-control">',
            $categories
        );
        return view('admin.products.edit')
        ->with('product', $product)
        ->with('categories', $categories);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric|exists:categories,id',
            // 'image' => 'image|mimes:jpeg,jpg,png | max:1000',
            'image' => 'required',
            'alias' => 'required|max:255'
        ]);
        $data = $request->all();
        // $file = $request->file('photo');
        // if (!empty($file)) {
        //     $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
        //     $file->move('upload', $data['image']);
        // } else {
        //     $data['image'] = 'default.jpg';
        // }
        $product = Product::findOrFail($id);
        $product->update($data);
        return redirect()->route('adminProductShow', ['id' => $product->id])->withSuccess('Product has been updated');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('admin/products')->withSuccess('Product has been deleted');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $category = $product->category;
        return view('admin.products.product')
            ->with('product', $product)
            ->with('category', $category);
    }
}
