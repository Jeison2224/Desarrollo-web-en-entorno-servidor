<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\EmployeeController;

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

Route::resource('supplier', SupplierController::class);
Route::resource('contact', ContactController::class);
Route::resource('employee', EmployeeController::class);
//Route::resource('employee', ProductController::class);

Route::get('employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('employee/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::delete('employee/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::get('employee/{employee}', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create');

?>
