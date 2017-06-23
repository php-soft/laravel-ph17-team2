<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newscategories = \App\NewsCategory::All();
        return view('admin/newscategory/index')->with('newscategories', $newscategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newscategory_cr = \App\NewsCategory::pluck('name','id');
        return view('admin/newscategory/create')->with('newscategory_cr', $newscategory_cr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newscategory = \App\NewsCategory::find($id);
        return view('admin/newscategory/create')->with('newscategory', $newscategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newscategory = \App\NewsCategory::find($id);
        $newscategory->update(Input::all());
        return redirect('/admin/newscategory')
        ->withSuccess('Cat has been updated.');
    }

    public function post()
    {
        $newscategory = \App\NewsCategory::create(Input::all());
        return redirect('/admin/newscategory')->withSuccess('Cat has been created.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $newcategory = \App\NewsCategory::find($id);
        $newcategory->delete();
        return redirect('/admin/newscategory')
        ->withSuccess('News Category has been deleted.');
    }
}
