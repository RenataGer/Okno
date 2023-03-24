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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () { return view('welcome');})->name('index');

Route::get('/contact', function () { return view('contact');})->name('contact');

Route::get('/addtocart/{id}', [App\Http\Controllers\ProductController::class,'addtocart']);

Route::get('/cart', [App\Http\Controllers\ProductController::class,'cart'])->name('cart');

Route::get('/cartadd/{id}', [App\Http\Controllers\CartController::class,'addbtn']);

Route::get('/cartrem/{id}', [App\Http\Controllers\CartController::class,'removebtn']);

Route::get('/cartall/{id}', [App\Http\Controllers\CartController::class,'removeall']);

Route::get('/filter', [App\Http\Controllers\ProductController::class,'filter']);

Route::get('/product/{id}', [App\Http\Controllers\ProductController::class,'getProduct']);

Route::get('/catalog', [App\Http\Controllers\ProductController::class,'index'])->name('catalog');








