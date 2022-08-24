<?php

namespace App\Http\Controllers;

use App\Http\Requests\Add_imageRequest;
use App\Http\Requests\Edit_imageRequest;
use App\Models\Image;
use App\Models\Product;
use App\MyClass\File_move;
use Illuminate\Foundation\Console\TestMakeCommand;
use Illuminate\Http\Request;

class Edit_imageController extends Controller
{
    public function edit_image(Product $product)
    {
        return view('edit_image',['product'=>$product]);
    }
    public function form_edit_image(Image $image)
    {
        return view('form_edit_image',['image'=>$image]);
    }
    public function operation_form_edit_image(Image $image,Edit_imageRequest $request)
    {
        if ($image->update(['image'=>$request->file('image')->getClientOriginalName()])){
            File_move::move($request->file('image'),'image');
            return view('form_edit_image',['successful'=>'edit image successful','image'=>$image]);
        }

    }
}
