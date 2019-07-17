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




Route::get('index', 'HomeController@displayHome');
Route::get('shop', 'ProductController@displayShop');
Route::get('shop/{id}', 'ProductController@displayProduct');
Route::get('cart', 'CartController@displayCart');
Route::get('pagination', 'ProductController@loadPagination');

Route::get('add-to-cart', 'CartController@addToCart');
Route::get('del-item', 'CartController@delItem');
