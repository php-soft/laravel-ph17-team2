<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductAttributeValue;

class ProductAttributeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.productattributes.index')
            ->with('products', $products);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.productattributes.show')
            ->with('product', $product);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'value' => 'required|max:255',
            'category_attribute_value_id' => 'required',
            'product_id' => 'required'
        ]);
        $data = $request->all();
        $productAttribute = ProductAttributeValue::create($data);
        return redirect()->route('adminProductAttributeShow', ['id' => $productAttribute->product_id]);
    }

    public function destroy($id)
    {
        $productAttribute = ProductAttributeValue::findOrFail($id);
        $product = $productAttribute->product_id;
        ProductAttributeValue::destroy($id);
        return redirect()->route('adminProductAttributeShow', ['id' => $product]);
    }
}
