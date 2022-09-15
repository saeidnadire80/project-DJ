<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class QuestionController extends Controller
{
    public function create(QuestionRequest $request)
    {
        dd('kgjk');
        $product=Product::query()->find($request->id_product);
        $product->question()->create([
            'user_id' => auth()->id(),
            'Question' =>$request['question'],
        ]);
        return back();
    }

    public function answer_insert()
    {
        $product=\App\Models\Question::query()->where('commentable_id',$_POST['product_id'])->where('Question',$_POST['Question'])->get();
        foreach ($product as $item)
            $product=Product::query()->find($_POST['product_id']);
        $product->question()->create([
            'user_id' => auth()->id(),
            'parent_id' => $item->id,
            'answer' => $_POST['answer'],
        ]);
        return back();
    }

    public function form_question()
    {
        if (auth()->user()) {
            $id_product = $_GET['id_product'];
            return view('user.question', compact('id_product'));
        }
        return view('auth.register');
    }

}
