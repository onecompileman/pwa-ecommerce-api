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

Route::namespace('api')->group(function() {
    Route::resource('products', 'ProductController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('orders', 'OrdersController');
});

