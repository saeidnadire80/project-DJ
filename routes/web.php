<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Add_productController;
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
    Route::get('add_product',[Add_productController::class,'add_product'])->name('add_product');
    Route::post('add_product',[Add_productController::class,'operation_add_product'])->name('operation_add_product');

});















