<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentValidations;
use App\Models\Product;
use Illuminate\Http\Request;


class Comment extends Controller
{
    public function index(Product $product)
    {
        return view('product',compact('product'));
    }
    public function create(Request $request )
    {

        $request->validate([
            'comment' => 'required||min:3||max:255'
        ]);
            $product = Product::query()->find($request->id_product);
            $product->comments()->create([
                'user_id' => auth()->id(),
                'title' => $request->title,
                'positive_points' => $request->positive_points,
                'cons' => $request->cons,
                'comment' => $request->comment,
                'Unknown' => $request->Unknown,
                'Score' =>$request->Score

            ]);
            return back();
    }

    public function single_product(Product $product)
    {
        return view('single_product',compact('product'));
    }

    public function comment(Product $product)
    {

        return view('user.comment',compact('product'));
    }


    public function form_comment()
    {
        if (auth()->user()) {
            $id_product = $_GET['id_product'];
            return view('user.comment', compact('id_product'));
        }
        return view('auth.register');
    }
}
