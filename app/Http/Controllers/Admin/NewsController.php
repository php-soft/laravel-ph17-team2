<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = \App\NewItem::with('user', 'newsCategory')->get();         
        return view('admin/news/index')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userData = Auth::user();
        $newscategorys = \App\newsCategory::all();   

        foreach ($newscategorys as $newscategory) {
            $arrnewscategory[$newscategory->id] = $newscategory->name; 
        }
       
        return view('admin/news/create')->with('userData', $userData)->with('arrnewscategory', $arrnewscategory);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {     
        $userData = Auth::user();   
        $news = \App\NewItem::find($id);  
        $newscategorys = \App\newsCategory::all();
        foreach ($newscategorys as $newscategory) {
            $arrnewscategory[$newscategory->id] = $newscategory->name; 
        }
        return view('admin/news/create')->with('news', $news)->with('userData', $userData)->with('arrnewscategory', $arrnewscategory);      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $news = \App\NewItem::find($id);
        $news->update(Input::all());
        return redirect('/admin/news');       
    }

    public function post()
    {      
       \App\NewItem::create(Input::all());
       return redirect('/admin/news');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        $newcategory = \App\NewItem::find($id);
        $newcategory->delete();
        return redirect('/admin/news')
        ->withSuccess('News has been deleted.');
    }
}
