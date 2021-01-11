<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductController;
use App\http\Controllers\CategoryController;
use App\http\Controllers\TagController;

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



Route::middleware(['auth'])->group(function () {
	Route::get('/', function () {
	    return view('welcome');
	});
    Route::resource('/products',ProductController::class );

    Route::resource('/category', CategoryController::class);
    Route::resource('/tag', TagController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
