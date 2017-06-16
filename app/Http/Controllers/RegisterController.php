<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
class RegisterController extends Controller
{
    public function store(){
    	// echo "test";
    	$data = Input::except(array('token'));
    	var_dump($data);
    }
}
