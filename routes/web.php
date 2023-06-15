<?php

use Illuminate\Support\Facades\Auth;
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

Route::group([
    'as' => 'app.',
    'namespace' => 'App'
], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('message', 'MessageController@message')->name('message');
    Route::get('search', 'HomeController@search')->name('search');
    Route::get('products', 'ProductController@ajax')->name('products');
    Route::group([
        'as' => 'cart.',
        'prefix' => 'cart'
    ], function () {
        Route::get('', 'CartController@index')->name('index');
        Route::post('', 'CartController@add')->name('add');
        Route::delete('', 'CartController@remove')->name('remove');
        Route::post('order', 'CartController@order')->name('order');
    });
});





Route::group([
    'as' => 'admin.',
    'namespace' => 'Admin',
    'prefix' => 'admin',
    'middleware' => ['auth']
], function () {
    Route::get('/', 'HomeController@admin')->name('home');
    Route::resource('users', 'UserController');
    Route::resource('products', 'ProductController');
    Route::resource('categories', 'CategoryController');
    Route::resource('orders', 'OrderController');
    Route::resource('messages', 'MessageController');
});

Auth::routes(['register' => false]);
