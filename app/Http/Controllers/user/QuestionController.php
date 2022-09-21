<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use App\Models\Product;
use App\Models\Question;
use \Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Product $product)
    {
        return view('user.question',compact('product'));
    }

    public function create(Product $product)
    {
        $product=Product::query()->find($product->id);
        $product->question()->create([
            'user_id' => auth()->id(),
            'Question' =>$_POST['question'],
        ]);
        return back();
    }

    public function answer_question(Request $request, Product $product, Question $question)
    {
        if (! auth()->check()) {
            return view('auth.register');
        }

        $request->validate([
           'answer' => ['required', 'min:3']
        ]);

        $product->question()->create([
            'user_id' => auth()->id(),
            'parent_id' => $question->id,
            'answer' => $request->answer,
        ]);

        return back();
    }

    public function answer(Product $product,Question $question){

        return view('user.answer_question', compact('question', 'product'));
    }




}
