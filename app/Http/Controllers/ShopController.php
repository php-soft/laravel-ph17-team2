<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\User;
use App\Product;
use App\ShopProduct;
use Input;

class ShopController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('shop.index')->with('user', $user);
    }

    public function create($id, request $request)
    {
        $shop = Shop::find($id);
        $shop = new Shop;
        $shop->name = $request->text;
        $shop->logo = $request->text;
        $shop->address = $request->text;
        $shop->description = $request->text;
        $shop->user_id = $request->text;
        $shop->save();
        return "Thanh cong";
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:25',
            'address' => 'required',
            'description' => 'required',
            'logo' => 'required',
        ], [
            'name.required' => 'Bắt buộc phải điền tên shop',
            'name.max' => 'Tên shop không quá 25 ký tự',
            'address.required' => 'Bắt buộc phải điền địa chỉ',
            'description.required' => 'Bắt buộc phải nhập mô tả',
            'logo.required' => 'Bắt buộc phải có logo shop',
        ]);
        $user = User::find($id);
        $user->shops = Shop::create(Input::all());
        return redirect('user/shop/'.$user->id.'/index');
    }

    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('shop.edit')->with('shop', $shop);
    }

    public function editUpdate($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:25',
            'address' => 'required',
            'description' => 'required',
            'logo' => 'required',
        ], [
            'name.required' => 'Bắt buộc phải điền tên shop',
            'name.max' => 'Tên shop không quá 25 ký tự',
            'address.required' => 'Bắt buộc phải điền địa chỉ',
            'description.required' => 'Bắt buộc phải nhập mô tả',
            'logo.required' => 'Bắt buộc phải có logo shop',
        ]);
        $shop = Shop::find($id);
        $shop->update(Input::all());
        return redirect('user/shop/'.$shop->id.'/edit');
    }

    public function destroy($id)
    {
        $shop = Shop::find($id);
        $shop->delete();
        return redirect('user/shop/'.$shop->user_id.'/index');
    }
}
