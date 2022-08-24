<?php

namespace App\Http\Controllers;

use App\Http\Requests\Add_productRequest;
use App\Models\Description;
use App\Models\Image;
use App\Models\Product;
use App\MyClass\File_move;
use Illuminate\Http\Request;

class Add_productController extends Controller
{
    public function add_product()
    {
        return view('add_product');
    }

    public function operation_add_product(Add_productRequest $request)
    {
        $product=Product::query()->create([
            'name_product'=>$request->name_product,
            'price'=>$request->price,
            'discount_price'=>$request->discount_price
        ]);
        if ($product){
            Description::query()->create([
                'product_id'=>Product::all()->last()->id,
                'color'=>$request->color,
                'plan'=>$request->plan,
                'weight'=>$request->weight,
                'description'=>$request->description
            ]);
        }
        return view('add_product',['successful'=>'create product successful']);

    }
}
