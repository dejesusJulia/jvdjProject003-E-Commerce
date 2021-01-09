<?php

use App\Http\Controllers\ProductTypeController;
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

// GUEST
Route::get('/', 'HomeController@index');

// USER (CLIENT)
Route::middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@indexUser')->name('user.home');
    Route::get('/user/profile/{user}', 'UserController@editUserProfile')->name('user.profile');
    Route::patch('/user/profile/{user}', 'UserController@updateUserProfile')->name('user.profileupdate');

    Route::get('/store', 'ProductController@index')->name('user.orders');
    Route::get('/orders', 'OrderController@index')->name('user.orders');
});

// MANAGER (SERVER)
Route::group(['middleware' => ['auth', 'manager']], function(){
    Route::get('/manager', 'HomeController@indexManager')->name('manager.home');
    Route::get('/manager/profile/{user}', 'UserController@editManagerProfile')->name('manager.profile');
    Route::patch('/manager/profile/{user}', 'UserController@updateManagerProfile')->name('manager.profileupdate');

    Route::get('/manager/orders', 'OrderController@show')->name('manager.orders');
    Route::get('/manager/order-update', 'OrderController@editOrder')->name('manager.orderedit');

    Route::get('/manager/products', 'ProductController@show')->name('manager.products');

    Route::get('/manager/product-add', 'ProductController@create')->name('manager.productadd')
    ;
    Route::get('/manager/product-add', 'ProductTypeController@addSelectType')->name('manager.producttypeadd');

    Route::post('/manager/product-add', 'ProductController@store')->name('manager.productstore');

    Route::get('/manager/product-view', 'ProductController@showSingle')->name('manager.productview');

    Route::get('/manager/product-update/{product}', 'ProductController@edit')->name('manager.productedit');
    Route::patch('/manager/product-update/{product}', 'ProductController@update')->name('manager.productupdate');
    
    Route::delete('/manager/product-delete/{product}', 'ProductController@destroy')->name('manager.deleteproduct');
    
});

// ADMIN (SERVER)
Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/admin', 'HomeController@indexAdmin')->name('admin.home');
    Route::get('/admin/profile/{user}', 'UserController@editAdminProfile')->name('admin.profile');
    Route::patch('/admin/profile/{user}', 'UserController@updateAdminProfile')->name('admin.profileupdate');

    // PRODUCT TYPE
    Route::get('/admin/product-types', 'ProductTypeController@index')->name('admin.producttypes');
    Route::post('/admin/product-types', 'ProductTypeController@store')->name('admin.producttypeadd');
    Route::get('/admin/product-type-update/{productType}', 'ProductTypeController@edit')->name('admin.producttypeedit');
    Route::patch('/admin/product-type-update/{productType}', 'ProductTypeController@update')->name('admin.producttypeupdate');
    Route::delete('/admin/product-type-delete/{productType}', 'ProductTypeController@destroy')->name('admin.producttypedelete');

    // USER ROLE
    Route::get('/admin/users', 'UserController@show')->name('admin.users');
    Route::get('/admin/user-update/{user}', 'UserController@editRole')->name('admin.useredit');
    Route::patch('/admin/user-update/{user}', 'UserController@updateRole')->name('admin.userupdate');
    Route::delete('/admin/user-delete/{user}', 'UserController@destroy')->name('admin.userdelete');
    
});




