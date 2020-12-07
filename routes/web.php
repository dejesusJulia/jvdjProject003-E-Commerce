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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// USER (CLIENT)
Route::group(['middleware' => ['auth', 'user']], function(){
    Route::get('/home', 'HomeController@index')->name('user.home');
});

// MANAGER (SERVER)
Route::group(['middleware' => ['auth', 'manager']], function(){
    Route::get('/manager', 'HomeController@indexManager')->name('manager.home');

    Route::get('/manager/orders', 'OrderController@show')->name('manager.orders');
    Route::get('/manager/order-update', 'OrderController@editOrder')->name('manager.orderedit');

    Route::get('/manager/products', 'ProductController@show')->name('manager.products');
    Route::get('/manager/product-view', 'ProductController@showSingle')->name('manager.productview');
    Route::get('/manager/product-update', 'ProductController@edit')->name('manager.productedit');
    

});

// ADMIN (SERVER)
Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/admin', 'HomeController@indexAdmin')->name('admin.home');

    Route::get('/admin/product-types', 'ProductTypeController@index')->name('admin.producttypes');
    Route::get('/admin/product-type-update', 'ProductTypeController@edit')->name('admin.producttypeedit');

    Route::get('/admin/users', 'UserController@show')->name('admin.users');
    Route::get('/admin/user-update', 'UserController@editRole')->name('admin.useredit');
    
});




