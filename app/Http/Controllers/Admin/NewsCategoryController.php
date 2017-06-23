<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{   
    public function index()
    {
        $newscategories = \App\NewsCategory::All();
        return view('admin/newscategory/index')->with('newscategories', $newscategories);
    }
 
    public function create()
    {
        $newscategory_cr = \App\NewsCategory::pluck('name', 'id');
        return view('admin/newscategory/create')->with('newscategory_cr', $newscategory_cr);
    }
     
    public function edit($id)
    {
        $newscategory = \App\NewsCategory::find($id);
        return view('admin/newscategory/create')->with('newscategory', $newscategory);
    }
  
    public function update($id)
    {
        $newscategory = \App\NewsCategory::find($id);
        $newscategory->update(Input::all());
        return redirect('/admin/newscategory')
        ->withSuccess('Cat has been updated.');
    }

    public function post()
    {
        \App\NewsCategory::create(Input::all());
        return redirect('/admin/newscategory')->withSuccess('Cat has been created.');
    }
    
    public function delete($id)
    {
        $newcategory = \App\NewsCategory::find($id);
        $newcategory->delete();
        return redirect('/admin/newscategory')
        ->withSuccess('News Category has been deleted.');
    }
}
