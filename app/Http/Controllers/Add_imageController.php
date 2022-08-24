<?php

namespace App\Http\Controllers;

use App\Http\Requests\Add_imageRequest;
use App\Http\Requests\Edit_imageRequest;
use App\Models\Image;
use App\Models\Product;
use App\MyClass\File_move;
use Illuminate\Http\Request;

class Add_imageController extends Controller
{
    public function add_image()
    {
        return view('add_image');
    }
    public function operation_add_image(Add_imageRequest $request)
    {

        foreach ($request->file() as $item){
            $s_image=File_move::move($item,'image');
            if ($s_image){
                Image::query()->create([
                    'product_id'=>Product::all()->last()->id,
                    'image'=>$item->getClientOriginalName()
                ]);
            }

        }
        return view('add_product');

    }
    public function add_new_image(Product $product)
    {
        return view('add_new_image',['product'=>$product]);
    }
    public function operation_add_new_image(Product $product,Edit_imageRequest $request)
    {
        Image::query()->create([
            'product_id'=>$product['id'],
            'image'=>$request->file('image')->getClientOriginalName()
        ]);
        return view('add_new_image',['successful'=>'create new image successful','product'=>$product]);
    }
}
