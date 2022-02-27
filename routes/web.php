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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/', 'Frontend\HomeController@index')->name('home');

Route::get('/home', 'App\Http\Controllers\Frontend\HomeController@index')->name('home');

Route::get('/category', 'App\Http\Controllers\Frontend\CategoryController@index')->name('category');

Route::get('/product-details', 'App\Http\Controllers\Frontend\ProductDetailsController@index')->name('product-details');