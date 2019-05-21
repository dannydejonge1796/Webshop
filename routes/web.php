<?php

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

//Route::get('/categories', 'CategoryController@index')->name('category');

Route::get('/products', 'ProductController@index')->name('product');
Route::get('/details', 'ProductController@detailsAction')->name('details');

Route::get('/cart', 'CartController@cartAction')->name('cart');
Route::get('/addCart', 'CartController@addCartAction')->name('addCart');
Route::get('/deleteCart', 'CartController@deleteCartAction')->name('deleteCart');

Route::get('/kill', 'CartController@kill');


