<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\User;
use App\Product;
use App\Voucher;
use App\ShopProduct;
use Input;

class ShopProductController extends Controller
{
    public function show($id)
    {
        $shop = Shop::find($id);
        return view('shop.show')->with('shop', $shop);
    }
    public function showVoucher($id)
    {
        $shop = Shop::find($id);
        $voucher=Voucher::Where('shop_id',$id)->get();
        return view('shop.showVoucher')->with('shop', $shop)->with('voucher', $voucher);
    }

    public function create($id)
    {
        $shop = Shop::find($id);
        $products = Product::All();
        return view('shop.post')->with('shop', $shop)->with('products', $products);
    }

    public function post($id_shop, $id_product)
    {
        $shop = Shop::find($id_shop);
        $product = Product::find($id_product);
        return view('shop.postProduct')->with('shop', $shop)->with('product', $product);
    }

    public function postProduct($id, Request $request)
    {
        $this->validate($request, [
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'discount' => 'required|numeric',
        ], [
            'price.required' => 'Bắt buộc phải điền giá thành',
            'price.numeric' => 'Giá phải là dạng số',
            'quantity.required' => 'Bắt buộc phải điền số lượng',
            'quantity.numeric' => 'Số lượng phải là dạng số',
            'discount.required' => 'Bắt buộc phải điền giảm giá',
            'discount.numeric' => 'Giảm giá phải là dạng số',
        ]);
        $shop = Shop::find($id);
        $shopProduct = ShopProduct::find($id);
        $shopProduct = ShopProduct::create(Input::all());
        return redirect('shop/'.$shop->id.'/show');
    }

    public function edit($id)
    {
        $shopProduct = ShopProduct::find($id);
        return view('shop.editProduct')->with('shopProduct', $shopProduct);
    }

    public function postEdit($id, Request $request)
    {
        $this->validate($request, [
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'discount' => 'required|numeric',
        ], [
            'price.required' => 'Bắt buộc phải điền giá thành',
            'price.numeric' => 'Giá phải là dạng số',
            'quantity.required' => 'Bắt buộc phải điền số lượng',
            'quantity.numeric' => 'Số lượng phải là dạng số',
            'discount.required' => 'Bắt buộc phải điền giảm giá',
            'discount.numeric' => 'Giảm giá phải là dạng số',
        ]);
        $shopProduct = ShopProduct::find($id);
        $shopProduct->update(Input::all());
        return redirect('shop/'.$shopProduct->id.'/edit');
    }
}
