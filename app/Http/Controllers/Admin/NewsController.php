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
        $newscategorys = \App\NewItem::with('newsCategory')->get(); 
        return view('admin/news/create')->with('userData', $userData)->with('newscategorys', $newscategorys);
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
        //
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
        //
    }
    public function post(Request $request)
    {
        $this->validate($request, [

        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    ]);

    var_dump($request);
    $image = $request->file('image');

    $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

    $destinationPath = public_path('/images');

    $image->move($destinationPath, $input['imagename']);


    $this->postImage->add($input);

       // \App\NewItem::create(Input::all());
       // return redirect('/admin/news');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $newcategory = \App\NewItem::find($id);
        $newcategory->delete();
        return redirect('/admin/news')
        ->withSuccess('News has been deleted.');
    }
}
