<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\User;
use Input;

class ShopController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('shop')->with('user', $user);
    }

    public function create($id)
    {
        $user = User::find($id);
        return view('shopCreate')->with('user', $user);
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
        // dd('kiemtre');
        $user = User::find($id);
        $user->shops = Shop::create(Input::all());
        return redirect('user/shop/'.$user->id.'/index');
    }

}
