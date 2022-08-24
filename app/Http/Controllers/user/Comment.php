<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentValidations;
use Illuminate\Http\Request;
use \App\Models\comment as comments;

class Comment extends Controller
{
    public function index()
    {

    }
    public function create(CommentValidations $request,comments $comment )
    {

        $comment->user_id = auth()->id();
        $comment->product_id =$request->id_product;
        $comment->title=$request->title;
        $comment->positive_points=$request->positive_points;
        $comment->cons=$request->cons;
        $comment->comment=$request->comment;
        $comment->Unknown=$request->Unknown;
        $comment->Score=$request->star;
        $comment->save();
    }
}
