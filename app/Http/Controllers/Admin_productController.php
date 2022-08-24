<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Admin_productController extends Controller
{
    public function admin_product()
    {
        $products=Product::all();
        return view('admin_product',['products'=>$products]);
    }
}
