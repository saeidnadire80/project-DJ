<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\comment;
use App\Models\Question;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }
    public function comment(Request $request)
    {
        $comment=\App\Models\comment::query();
        if ($approved=request('approved')) {
            $comment->where('approved',$approved);
            $comment=$comment->paginate(15);
            return view('admin.comment',compact('comment'));
        }
        if ($search=$request->search) {
            $comment->where('commentable_id', 'LIKE', "%{$search}%")->orWhere('user_id', 'LIKE', "%{$search}%");
        }
        $comment=$comment->paginate(15);
        return view('admin.comment',compact('comment'));
    }
    public function question(Request $request)
    {
        $question=\App\Models\Question::query();
        if ($approved=request('approved')) {
            $question->where('approved',$approved);
            $question=$question->paginate(15);
            return view('admin.question',compact('question'));
        }
        if ($search=$request->search) {
            $question->where('commentable_id', 'LIKE', "%{$search}%")->orWhere('user_id', 'LIKE', "%{$search}%");
        }
        $question=$question->paginate(15);
        return view('admin.question',compact('question'));
    }
    public function update_approved_comment(comment $comment ,Request $request )
    {
        $comment->where('id',$request->id)->update([
            'approved' => 1,
        ]);
        return back();
    }
    public function delete_comment(comment $comment,Request $request)
    {
        $comment->find($request->id)->delete();
        return back();
    }
    public function update_approved_question(Question $question,Request $request)
    {

        $question->where('id',$request->id)->update([
            'approved' => 1,
        ]);
        return back();
    }
    public function delete_question(Question $question , Request $request)
    {
        $question->query()->find($request->id)->delete();
        return back();
    }
}

