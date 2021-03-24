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

Route::get('/', 'App\Http\Controllers\ObjetosController@index')->name('objetos.index');

Route::get('agregar', 'App\Http\Controllers\ObjetosController@vistaAgregar')->name('objetos.agregar');

Route::post('crear', 'App\Http\Controllers\ObjetosController@crear')->name('objetos.store');

Route::get('/{id}/editar', 'App\Http\Controllers\ObjetosController@edit' )->name('objetos.edit');

Route::put('/{objetos}/editar', 'App\Http\Controllers\ObjetosController@update' )->name('objetos.update');

Route::delete('/{id}', 'App\Http\Controllers\ObjetosController@destroy' )->name('objetos.destroy');

