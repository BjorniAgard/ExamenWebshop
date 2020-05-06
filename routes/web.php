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
    return view('home');
});

Auth::routes();

Route::resource('product', 'ProductController');
Route::get('/order/{order}/createOrderProduct', 'OrderController@createOrderProduct')->name('createOrderProduct.create');
Route::post('order/store', 'OrderController@storeOrderProduct')->name('storeOrderProduct.store');
Route::get('order{order}/edit', 'OrderController@editOrderProduct')->name('editOrderProduct.edit');
Route::patch('order/{order}/update', 'OrderController@updateOrderProduct')->name('updateOrderProduct.update');
Route::delete('order/{order}/order', 'OrderController@destroyOrderProduct')->name('destroyOrderProduct.destroy');
Route::resource('order', 'OrderController');
Route::resource('users', 'UserController');

Route::get('/home', 'HomeController@index')->name('home');
