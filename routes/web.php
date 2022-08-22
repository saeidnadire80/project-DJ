<?php

use Illuminate\Support\Facades\Route;

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
Route::get('form', function (){
   return view('form');
});
Route::post('form', function (){
    return $_POST;
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
