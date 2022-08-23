<?php

namespace App\Http\Controllers;

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

    public function operation_add_product(Request $request)
    {
        $product=Product::query()->create([
            'name_product'=>$request->name_product,
            'price'=>$request->price,
            'discount_price'=>$request->discount_price
        ]);
        if ($product){
            foreach ($request->file() as $item){
                $s_image=File_move::move($item,'image');
                if ($s_image) {
                    Image::query()->create([
                        'product_id' => Product::all()->last()->id,
                        'image' => $item->getClientOriginalName()
                    ]);
                }

            }
        }
        if ($product){
            Description::query()->create([
                'product_id'=>Product::all()->last()->id,
                'color'=>$request->color,
                'plan'=>$request->plan,
                'weight'=>$request->weight,
                'description'=>$request->description
            ]);
        }

        return redirect()->back();


    }
}
