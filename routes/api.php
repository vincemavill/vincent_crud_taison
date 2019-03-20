<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('show_list', 'product_controller@index');


Route::post('save_product', 'product_controller@store');

Route::get('delete/{id}', 'product_controller@destroy');

Route::post('update_product/{id}', 'product_controller@update');

Route::post('product_addcart/{id}', 'product_controller@store_cart');
