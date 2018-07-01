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



Route::prefix('admin')->group(function () {

    // Routes of adminDashboard
    Route::resource('/','AdminController');


    // Routes of products
    Route::resource('products', 'ProductController');

    // Routes of categories
    Route::resource('categories', 'CategoryController');
});