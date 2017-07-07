<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = \App\NewItem::with('user', 'newsCategory')->get();
        $categories = \App\newsCategory::All();
        return view('news/index')->with('news', $news)->with('categories', $categories);
    }

    public function show($alias)
    {
        $new = \App\NewItem::where('alias', '=', $alias)->firstOrFail();
        $categories = \App\newsCategory::All();
        return view('news/view')->with('new', $new)->with('categories', $categories);
    }

    public function showcategory($alias)
    {
        $new = \App\NewItem::where('alias', '=', $alias)->firstOrFail();
    }
}
