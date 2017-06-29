<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Input;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('userDetail')->with('user', $user);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('editUserDetail')->with('user', $user);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:10',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
        ], [
            'name.required' => 'Bắt buộc phải điền tên',
            'name.max' => 'Tên không quá 10 ký tự',
            'email.required' => 'Bắt buộc phải điền email',
            'email.email' => 'Email không nhập đúng định dạng',
            'phone.required' => 'Bắt buộc phải nhập điện thoại',
            'phone.numeric' => 'Điện thoại phải dạng số',
            'address.required' => 'Bắt buộc phải nhập địa chỉ',
            'gender.required' => 'Bắt buộc phải nhập giới tính',
            'date_of_birth.required' => 'Bắt buộc phải nhập ngày sinh',
        ]);
        $user = User::find($id);
        $user->update(Input::all());
        if (empty($user->profile)) {
            $user->profile = Profile::create(Input::all());
        } else {
            $user->profile->update(Input::all());
        }
        return redirect('user/profile/'.$user->id.'/index');
    }
}
