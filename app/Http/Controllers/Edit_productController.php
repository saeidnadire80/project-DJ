<?php

namespace App\Http\Controllers;

use App\Http\Requests\Edit_productRequest;
use App\Models\Description;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class Edit_productController extends Controller
{
    public function edit_product(Product $product)
    {

        return view('edit_product',['product'=>$product]);
    }
    public function operation_edit_product(Edit_productRequest $request , Product $product)
    {
        $product->name_product=$request->name_product;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $E_P=$product->save();

        if ($E_P){
            $d=Description::find($product->id)->update([
                'color'=>$request->color,
                'weight'=>$request->weight,
                'description'=>$request->description,
                'plan'=>$request->plan
            ]);
            if ($d) {
                return view('edit_product',['successful'=>'edit product successful','product'=>$product]);
            }
        }

    }
}
