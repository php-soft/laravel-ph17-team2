<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        $news = \App\NewItem::with('user', 'newsCategory')->paginate(2);
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

    public function showCategory($id)
    {
        $news = \App\NewItem::with('user', 'newsCategory')->where('news_category_id', '=', $id)->paginate(2);
        $categories = \App\newsCategory::All();
        $categories_badges = \App\NewItem::with('newsCategory')
            ->select(DB::raw('news_category_id, count(*) as categories_badge_count'))
        ->groupBy('news_category_id')
        ->get();
        return view('news/category')
        ->with('news', $news)
        ->with('categories', $categories)
        ->with('categories_badges', $categories_badges);
    }

    public function show($alias)
    {
        $new = \App\NewItem::where('alias', '=', $alias)->first();
        $news_comment = \App\CommentPost::where([['news_id', $new->id], ['status', '=', 'Show']])->get();
        $new->views += 1;
        $new->save();
        $categories = \App\newsCategory::All();
        $categories_badges = \App\NewItem::with('newsCategory')
        ->select(DB::raw('news_category_id, count(*) as categories_badge_count'))
        ->groupBy('news_category_id')
        ->get();
        return view('news/view')->with('new', $new)
        ->with('categories', $categories)
        ->with('categories_badges', $categories_badges)
        ->with('news_comment', $news_comment);
    }
}
