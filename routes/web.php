<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\CommentValidations;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('admin',function () {
    return 'hello admin';
})->middleware('auth.admin');
Route::get('comment', function (){
    return view('comment');
});
Route::POST('single/comment' , function (){
    return view('singleproduct');
});
Route::GET('single/comment' , function (){
    return view('singleproduct');
});
Route::post('single/form',[\App\Http\Controllers\user\Comment::class,'create']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
