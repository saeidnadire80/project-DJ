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

Auth::routes();
Route::get('admin',function () {
    return 'hello admin';
})->middleware('auth.admin');
Route::get('comment', function (){
    return view('comment');
});
Route::POST('single/comment' , function (){
    Alert::alert('Title', 'Message', 'Type');
    return view('singleproduct');
});
Route::GET('single/comment' , function (){
    return view('singleproduct');
});
Route::post('single/form',[\App\Http\Controllers\user\Comment::class,'create']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::POST('single/question' , function (){
    $product=Product::query()->find($_POST['id_product']);
    $product->question()->create([
        'user_id' => auth()->id(),
        'Question' =>$_POST['question'],
        ]);
});
Route::post('single/answer',function (){
    $product=\App\Models\Question::query()->where('commentable_id',$_POST['product_id'])->where('Question',$_POST['Question'])->get();
    foreach ($product as $item)
   $product=Product::query()->find($_POST['product_id']);
   $product->question()->create([
      'user_id' => auth()->id(),
       'parent_id' => $item->id,
       'answer' => $_POST['answer'],
   ]);

});
Route::get('s' , function (){
    $alert=new alert();
    $alert->render();
});
