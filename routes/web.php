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
Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('/productos', 'ProductosController@index');
Route::get('/productos/get', 'ProductosController@getDate');
Route::get('/productos/create', 'ProductosController@create');
Route::post('/productos/save', 'ProductosController@save');
Route::get('/productos/edit/{id}', 'ProductosController@edit');
Route::post('/productos/update', 'ProductosController@update');
