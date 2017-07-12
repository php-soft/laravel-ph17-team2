<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = \App\NewItem::with('user', 'newsCategory')->get();
        $categories = \App\newsCategory::All();
        $categories_badges = \App\NewItem::with('newsCategory')
            ->select(DB::raw('news_category_id, count(*) as categories_badge_count'))
        ->groupBy('news_category_id')
        ->get();
        return view('news/index')
        ->with('news', $news)
        ->with('categories', $categories)
        ->with('categories_badges', $categories_badges);
    }

    public function show($alias)
    {

        $new = \App\NewItem::where('alias', '=', $alias)->firstOrFail();

        $categories = \App\newsCategory::All();

        $categories_badges = \App\NewItem::with('newsCategory')
        ->select(DB::raw('news_category_id, count(*) as categories_badge_count'))
        ->groupBy('news_category_id')
        ->get();
        return view('news/view')->with('new', $new)
        ->with('categories', $categories)
        ->with('categories_badges', $categories_badges);
    }
}
