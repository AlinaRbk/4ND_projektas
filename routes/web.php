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

Route::prefix('products')->group(function() {
    Route::get('', 'App\Http\Controllers\ProductController@index')->name('product.index');
    Route::get('create', 'App\Http\Controllers\ProductController@create')->name('product.create');
    Route::get('edit/{product}', 'App\Http\Controllers\ProductController@edit')->name('product.edit');
    Route::post('store', 'App\Http\Controllers\ProductController@store')->name('product.store');
    Route::post('update/{product}', 'App\Http\Controllers\ProductController@update')->name('product.update');


});
Route::prefix('productCategories')->group(function() {
    Route::get('', 'App\Http\Controllers\ProductCategoryController@index')->name('productcategory.index');
    Route::get('create', 'App\Http\Controllers\ProductCategoryController@create')->name('productcategory.create');
    Route::get('edit{productCategory}', 'App\Http\Controllers\ProductCategoryController@edit')->name('productcategory.edit');
    Route::post('store', 'App\Http\Controllers\ProductCategoryController@store')->name('productcategory.store');
    Route::post('update/{productCategory}', 'App\Http\Controllers\ProductcategoryController@update')->name('productcategory.update');



});