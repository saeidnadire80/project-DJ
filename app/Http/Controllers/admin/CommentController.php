<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index_comment()
    {
        $comment=\App\Models\comment::query();
        if ($approved=request('approved')) {
            $comment->where('approved',$approved);
            $comment=$comment->paginate(15);
            return view('admin.comment',compact('comment'));
        }
        if ($search=request('search')) {
            $comment->where('commentable_id', 'LIKE', "%{$search}%")->orWhere('user_id', 'LIKE', "%{$search}%");
        }
        $comment=$comment->paginate(15);
        return view('admin.comment',compact('comment'));
    }

    public function update()
    {
        \App\Models\comment::query()->where('id',$_POST['id'])->update([
            'approved' => 1,
        ]);
        return back();
    }

    public function delete()
    {
        $comment=\App\Models\comment::query()->find(request('id'));
        $comment->delete();
        return back();
    }

}
