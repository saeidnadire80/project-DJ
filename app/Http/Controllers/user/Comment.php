<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentValidations;
use App\Models\Product;
use Illuminate\Http\Request;
use \App\Models\comment as comments;

class Comment extends Controller
{
    public function index()
    {

    }
    public function create(CommentValidations $request )
    {
        $product=Product::query()->find($request->id_product);
        $product->comments()->create([
        'user_id' => auth()->id(),
        'title' => $request->title,
        'positive_points' => $request->positive_points,
        'cons' => $request->cons,
        'comment' => $request->comment,
        'Unknown' => $request->Unknown,
        'Score' => $request->star,]);
    }
}
