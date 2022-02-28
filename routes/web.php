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


// Route::get('/', 'Frontend\HomeController@index')->name('home');

Route::get('/home', 'App\Http\Controllers\Frontend\HomeController@index')->name('home');

Route::get('/category', 'App\Http\Controllers\Frontend\CategoryController@index')->name('category');

Route::get('/product-details', 'App\Http\Controllers\Frontend\ProductDetailsController@index')->name('product-details');

// Admin site
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\Backend\AdminController@index')->name('dashboard');

// Route::get('/dashboard', 'App\Http\Controllers\Backend\AdminController@index')->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/add-category', [
        'uses' => 'App\Http\Controllers\Backend\CategoryController@addCategory',
        'as' => 'add-category',
    ]);
    Route::post('/new-category', [
        'uses' => 'App\Http\Controllers\Backend\CategoryController@newCategory',
        'as' => 'new-category',
    ]);
    Route::get('/manage-category', [
        'uses' => 'App\Http\Controllers\Backend\CategoryController@manageCategory',
        'as' => 'manage-category',
    ]);
    Route::get('/edit-category/{id}', [
        'uses' => 'App\Http\Controllers\Backend\CategoryController@editCategory',
        'as' => 'edit-category',
    ]);
    Route::post('/update-category', [
        'uses' => 'App\Http\Controllers\Backend\CategoryController@updateCategory',
        'as' => 'update-category',
    ]);
    Route::get('/delete-category/{id}', [
        'uses' => 'App\Http\Controllers\Backend\CategoryController@deleteCategory',
        'as' => 'delete-category',
    ]);
});
