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
    return view('layouts.all');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//crud restaurantes

Route::get('/restaurant/create', 'Admin\RestaurantController@create');
Route::post('/restaurant/store', 'Admin\RestaurantController@store');
Route::get('/restaurant/index', 'Admin\RestaurantController@index');
Route::get('/restaurant/edit/{restaurant_id}', 'Admin\RestaurantController@edit');
Route::post('/restaurant/update/{restaurant_id}', 'Admin\RestaurantController@update');
Route::get('/restaurant/destroy/{restaurant_id}','Admin\RestaurantController@destroy' );

//crud produtos

Route::get('/product/create', 'Restaurants\ProductController@create');
Route::post('/product/store', 'Restaurants\ProductController@store');
Route::get('/product/index', 'Restaurants\ProductController@index');
Route::get('/product/edit/{product_id}', 'Restaurants\ProductController@edit');
Route::post('/product/update/{product_id}', 'Restaurants\ProductController@update');
Route::get('/product/destroy/{product_id}','Restaurants\ProductController@destroy');

//crud comandas

Route::get('/order/create', 'Restaurants\OrderController@create');
Route::post('/order/store', 'Restaurants\OrderController@store');
Route::get('/order/index', 'Restaurants\OrderController@index');
Route::get('/order/edit/{order_id}', 'Restaurants\OrderController@edit');
Route::post('/order/update/{order_id}', 'Restaurants\OrderController@update');
Route::get('/order/destroy/{order_id}','Restaurants\OrderController@destroy');

//crud funcionários

Route::get('/employee/create', 'Restaurants\EmployeeController@create');
Route::post('/employee/store', 'Restaurants\EmployeeController@store');
Route::get('/employee/index', 'Restaurants\EmployeeController@index');
Route::get('/employee/edit/{employee_id}', 'Restaurants\EmployeeController@edit');
Route::post('/employee/update/{employee_id}', 'Restaurants\EmployeeController@update');
Route::get('/employee/destroy/{employee_id}','Restaurants\EmployeeController@destroy');

//Login

Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');



