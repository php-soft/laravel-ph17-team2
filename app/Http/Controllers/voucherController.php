<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voucherController extends Controller
{
    public function index($id)
    {
        $voucher = \App\Voucher::where('shop_id',4)->get();
        dd($voucher);
        return view('voucher.index')->with('vouchers', $voucher);
    }
}
