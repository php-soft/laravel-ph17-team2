<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsPostController extends Controller
{
    public function index()
    {
        $comments = \App\commentPost::All();
        return view('admin/comments/index')->with('comments', $comments);
    }

    public function update($id)
    {
        $comments = \App\commentPost::find($id);
        
        $comments->update(Input::All());
        
        return redirect('/admin/commentspost')
        ->withSuccess('Trạng thái được cập nhật thành công!');
    }

    public function delete($id)
    {
        $comments = \App\commentPost::find($id);
        $comments->delete();
        return redirect('/admin/commentspost')
        ->withSuccess('Comment được xóa thành công!');
    }
}
