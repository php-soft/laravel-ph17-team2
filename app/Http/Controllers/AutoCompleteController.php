<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;

class AutoCompleteController extends Controller
{   
	public function autoComplete(Request $request) {
        $query = $request->get('key','');
        $products=Product::where('name','LIKE','%'.$query.'%')
            ->get();
        $data=array();
        foreach ($products as $product) {
                $data[]= $product->name;
        }
        return json_encode($data);
    }
}
