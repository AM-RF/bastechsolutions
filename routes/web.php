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
    return view('welcome');
});

Route::get('/home', 'ProductoController@index')->name('productos');
Route::get('/home/Crear_productos', 'ProductoController@crear')->name('CrearProductos');
Route::post('/home/Crear_productos/save', 'ProductoController@save')->name('SaveProductos');
Route::get('/home/Editar_productos/{id}', 'ProductoController@editar')->name('EditarProductos');
Route::post('/home/Crear_productos/update', 'ProductoController@update')->name('UpdateProductos');
Route::get('/home/delete/{id}', 'ProductoController@delete')->name('DeleteProductos');

Route::get('/home/categorias', 'CategoriaController@index')->name('categorias');
Route::get('/home/categorias/Crear_categoeria', 'CategoriaController@crear')->name('CrearCategoria');
Route::post('/home/categorias/Crear_categoeria/save', 'CategoriaController@save')->name('SaveCategoria');
Route::get('/home/categorias/Editar_categoeria/{id}', 'CategoriaController@editar')->name('EditarCategoria');
Route::post('/home/categorias/Crear_categoeria/update', 'CategoriaController@update')->name('UpdateCategoria');
Route::get('/home/categorias/delete/{id}', 'CategoriaController@delete')->name('DeleteCategoria');
