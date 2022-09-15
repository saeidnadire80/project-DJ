<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\CommentValidations;
Use Illuminate\Console\View\Components\Alert;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();


Route::get('product',[\App\Http\Controllers\user\Comment::class,'index']);
Route::get('single/product' ,[\App\Http\Controllers\user\Comment::class,'single_product']);



Route::post('single/comment/form/send',[\App\Http\Controllers\user\Comment::class,'create']);
Route::get('single/comment/form',[\App\Http\Controllers\user\Comment::class,'form_comment']);


Route::post('single/question/form/send' ,[\App\Http\Controllers\user\QuestionController::class,'create']);
Route::post('single/answer',[\App\Http\Controllers\user\QuestionController::class,'answer_insert']);
Route::get('single/question/form',[\App\Http\Controllers\user\QuestionController::class,'form_question']);



Route::prefix('admin')->middleware('auth.admin')->group(function (){
    Route::get('/',[\App\Http\Controllers\admin\AdminController::class,'index']);
    Route::get('comment',[\App\Http\Controllers\admin\CommentController::class,'index_comment']);
    Route::post('update_approved_comment',[\App\Http\Controllers\admin\CommentController::class,'update'])->name('update_approved_comment');
    Route::post('delete_comment',[\App\Http\Controllers\admin\CommentController::class,'delete'])->name('delete_comment');
    Route::get('question',[\App\Http\Controllers\admin\QuestionController::class,'index_question']);
    Route::post('update_approved_question',[\App\Http\Controllers\admin\QuestionController::class,'update'])->name('update_approved_question');
    Route::post('delete_question',[\App\Http\Controllers\admin\QuestionController::class,'delete'])->name('delete_question');
});



Route::prefix('profile')->group(function (){
    Route::get('/',[\App\Http\Controllers\user\ProfileController::class,'index'])->name('profile');
    Route::post('get_out/user',[\App\Http\Controllers\user\ProfileController::class,'get_out']);
});
