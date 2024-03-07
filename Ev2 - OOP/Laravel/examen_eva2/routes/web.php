<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('index');})->name('menu');

Route::get('product', 'ProductController@index')->name('product.index');
Route::get('product/id={product?}', 'ProductController@show')->name('product.show');
Route::get('product/create', 'ProductController@create')->name('product.create');
Route::post('product/{product?}', 'ProductController@store')->name('product.store');
Route::get('product/{product}/edit', 'ProductController@edit')->name('product.edit');
Route::patch('product/{product}', 'ProductController@update')->name('product.update');
Route::delete('product/{product}', 'ProductController@destroy')->name('product.destroy');

Route::get('supplier/products', 'SupplierController@products')->name('supplier.products');
Route::get('order/form', 'OrderController@showForm')->name('order.form');
Route::get('order/resume', 'OrderController@showResume')->name('order.resume');
Route::get('order/all', 'OrderController@showAll')->name('order.all');
Route::get('order/{order}/edit', 'OrderController@edit')->name('order.edit');
Route::get('order/{order}', 'OrderController@destroy')->name('order.destroy');

Route::get('order/{order}', 'OrderController@update')->name('order.update');

Route::get('order/create', 'OrderController@create')->name('order.create');

Route::resource('supplier', 'SupplierController');
Route::resource('contact', 'ContactController');
Route::resource('employee', 'EmployeeController');
Route::resource('order', 'orderController');

?>
