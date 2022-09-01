<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Add_productController;
use \App\Http\Controllers\Edit_productController;
use App\Http\Controllers\Add_imageController;
use \App\Http\Controllers\Edit_imageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function(){
    //add product Route
    Route::get('add_product',[Add_productController::class,'add_product'])->name('add_product');
    Route::post('add_product',[Add_productController::class,'operation_add_product'])->name('operation_add_product');

    //add image Route To product
    Route::get('add_image',[Add_imageController::class,'add_image'])->name('add_image');
    Route::post('add_image',[Add_imageController::class,'operation_add_image'])->name('operation_add_image');

    //view products To operation edit or add
    Route::get('admin_product',[\App\Http\Controllers\Admin_productController::class,'admin_product'])->name('admin_product');

    //operation edit product
    Route::get('edit_product/{product}',[Edit_productController::class,'edit_product'])->name('edit_product');
    Route::put('edit_product/{product}',[Edit_productController::class,'operation_edit_product'])->name('operation_edit_product');

    //view images one product
    Route::get('edit_image/{product}',[Edit_imageController::class,'edit_image'])->name('edit_image');

    //operation edit images one product
    Route::get('form_edit_image/{image}',[Edit_imageController::class,'form_edit_image'])->name('form_edit_image');
    Route::put('form_edit_image/{image}',[Edit_imageController::class,'operation_form_edit_image'])->name('operation_form_edit_image');

    //operation add new image To one product
    Route::get('add_new_image/{product}',[Add_imageController::class,'add_new_image'])->name('add_new_image');
    Route::put('add_new_image/{product}',[Add_imageController::class,'operation_add_new_image'])->name('operation_add_new_image');

});

Route::get('test',function (){
//    return \App\Models\Category::query()->create([
//        'name_category'=>'pirhan',
//        'parent_id'=>6
//    ]);
//    return \App\Models\Product::query()->create([
//        'name_product'=>'labtab',
//        'category_id'=>3,
//        'visit'=>0,
//        'price'=>'10000'
//
//    ]);
//    return \App\Models\Product::find(1)->categories();
    $categories=\App\Models\Category::query()->where('parent_id',0)->get();
    return view('cate',['categories'=>$categories]);
});













