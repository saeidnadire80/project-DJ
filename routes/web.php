<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CommentController;
use App\Http\Controllers\admin\QuestionController as AdminQuestionController;
use App\Http\Controllers\user\Comment;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\QuestionController;
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

Route::get('product',[Comment::class,'index']);
Route::get('product/{product}',[Comment::class,'single_product'])->name('single.product');

Route::get('comment/{product}',[Comment::class,'comment'])->name('comment');
Route::post('comment/{product}',[Comment::class,'create']);

Route::get('question/{product}',[QuestionController::class,'index'])->name('question');
Route::post('question/{product}' ,[QuestionController::class,'create']);

Route::get('/question/{product}/answer/{question}', [QuestionController::class, 'answer'])->name('question.answer');
Route::post('/question/{product}/answer/{question}',[QuestionController::class,'answer_question']);


Route::prefix('admin')->middleware('auth.admin')->group(function (){
    Route::get('/',[AdminController::class,'index']);
    Route::get('comment',[AdminController::class,'comment'])->name('admin.comment');
    Route::post('update_approved_comment',[AdminController::class,'update_approved_comment'])->name('update.approved.comment');
    Route::post('delete_comment',[AdminController::class,'delete_comment'])->name('delete.comment');
    Route::get('question',[AdminController::class,'question'])->name('admin.question');
    Route::post('update_approved_question',[AdminController::class,'update_approved_question'])->name('update.approved.question');
    Route::post('delete_question',[AdminController::class,'delete_question'])->name('delete.question');
});



Route::prefix('profile')->group(function (){
    Route::get('/',[ProfileController::class,'index'])->name('profile');
    Route::post('get_out/user',[ProfileController::class,'get_out']);
});


