<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index_question()
    {

        $question=\App\Models\Question::query();
        if ($approved=request('approved')) {
            $question->where('approved',$approved);
            $question=$question->paginate(15);
            return view('admin.question',compact('question'));
        }
        if ($search=request('search')) {
            $question->where('commentable_id', 'LIKE', "%{$search}%")->orWhere('user_id', 'LIKE', "%{$search}%");
        }
        $question=$question->paginate(15);
        return view('admin.question',compact('question'));
    }
    public function update()
    {

        \App\Models\Question::query()->where('id',$_POST['id'])->update([
            'approved' => 1,
        ]);
        return back();
    }
    public function delete()
    {
        $question=\App\Models\Question::query()->find(request('id'));
        $question->delete();
        return back();
    }
}
