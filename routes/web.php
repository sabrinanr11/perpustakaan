<?php

use Illuminate\Support\Facades\Route;
// use \App\Http\Controllers\

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

Route::get('login', [\App\Http\Controllers\LoginController::class, 'index']);
Route::post('actionLogin', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('actionLogin');



Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('category', \App\Http\Controllers\CategoryController::class);
Route::resource('book', \App\Http\Controllers\BookController::class);
Route::resource('member', \App\Http\Controllers\MemberControllerController::class);




//get, post, put, delete
Route::resource('belajar', \App\Http\Controllers\BelajarController::class);
Route::resource('user', \App\Http\Controllers\UserController::class);

Route::get('add', [\App\Http\Controllers\BelajarController::class, 'add']);
Route::post('add_Store', [\App\Http\Controllers\BelajarController::class, 'addStore'])->name('add_Store');
Route::get('kurang', [\App\Http\Controllers\BelajarController::class, 'kurang']);
Route::post('store_Kurang', [\App\Http\Controllers\BelajarController::class, 'storeKurang'])->name('store_Kurang');




Route::get('/', function () {
    return view('welcome');
});
