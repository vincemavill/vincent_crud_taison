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

Route::get('/', "home_controller@index");

Route::get('add', "home_controller@add");

Route::get('edit/{id}', "home_controller@edit");

Route::get('cartlist', "home_controller@cart");

Route::get('addcart/{id}', "home_controller@get_cart");


