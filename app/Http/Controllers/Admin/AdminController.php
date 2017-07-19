<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }

    Public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:3',
        ], [
            'email.required' => 'Bắt buộc phải điền email',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Bắt buộc phải điền mật khẩu',
            'password.min' => 'Mật khẩu không được nhập nhỏ hơn 3 ký tự',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('admin/shop/index');
        } else {
            return redirect('admin/login')->with('thongbao', 'Tài khoản không đúng');
        }
    }
}
