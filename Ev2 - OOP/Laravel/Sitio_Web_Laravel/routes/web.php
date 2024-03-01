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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [App\Http\Controllers\MovieController::class, 'getPelis'])->name('movie.list');


Route::get('/peli/{id}', [App\Http\Controllers\MovieController::class, 'getPeli'])->name('peli');

Route::get('/peliculasporgenero/{genre}', [App\Http\Controllers\GenreController::class, 'peliculasporgenero'])->name('peliculasporgenero');

Route::get('/ultimas-novedades', [App\Http\Controllers\MovieController::class, 'ultimasNovedades'])->name('ultimas-novedades');

Route::get('/proximos-estrenos', [App\Http\Controllers\MovieController::class, 'proximosEstrenos'])->name('proximos-estrenos');
