<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\User;
use App\Product;
use App\ShopProduct;
use App\Voucher;
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
        $Voucher = Voucher::where('shop_id', $id)->get();
        return view('shop.showVoucher')->with('shop', $shop)->with('Voucher', $Voucher);
    }
    public function createVoucher($id)
    {
        $shop = Shop::find($id);
        return view('shop.createVoucher')->with('shop', $shop);
    }
    public function storeVoucher($id, Request $request)
    {
        $this->validate($request, [
            'discount' => 'required|numeric',
            'quantity' => 'required|numeric',
            'code' => 'required|numeric',
            'start_date' => 'required',
            'shop_id' => 'required',
        ], [
            'discount.required' => 'Bắt buộc phải điền phần trăm giảm giá',
            'discount.numeric' => ' phải là dạng số',
            'quantity.required' => 'Bắt buộc phải điền số lượng',
            'quantity.numeric' => 'Số lượng phải là dạng số',
            'code.required' => 'Bắt buộc phải điền mã code',
            'code.numeric' => 'Giảm giá phải là dạng số',
            'start_date.required' => 'Bắt buộc phải điền thời gian bắt đầu',
            'end_date.required' => 'Bắt buộc phải điền thời gian kết thúc',
        ]);
        $shop = Shop::find($id);
        $Voucher = Voucher::find($id);
        $Voucher = new $Voucher;
        $Voucher->discount = Input::get('discount');
        $Voucher->quantity = Input::get('quantity');
        $Voucher->code = Input::get('code');
        $Voucher->start_date = Input::get('start_date');
        $Voucher->end_date = Input::get('end_date');
        $Voucher->shop_id=$shop->id;
        $Voucher->save();
        return redirect('shop/'.$shop->id.'/Voucher/');
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
