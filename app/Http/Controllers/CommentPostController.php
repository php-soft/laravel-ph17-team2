<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommentPost;
use App\NewItem;

class CommentPostController extends Controller
{   
    public function update(Request $request, $id)
    {
        $news_id = $id;      
        $new = NewItem::find($id);       
        $comment = New CommentPost;
        $comment->comments = $request->comments;
        $comment->name = $request->name;
        $comment->news_id = $news_id;
        $comment->save();
        return redirect()->route('news.show', ['alias' => $new->alias]);
    }
}
