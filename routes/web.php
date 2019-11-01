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

Route::get('/', 'PagesController@index');

// Route::get('/fazendas', 'FazendasController@index');
// Route::post('/fazendas', 'FazendasController@store');
// Route::get('/fazendas/create', 'FazendasController@create');
// Route::get('/fazendas/{fazenda}', 'FazendasController@show');
// Route::get('/fazendas/{fazenda}/edit', 'FazendasController@edit');
// Route::put('/fazendas/{fazenda}', 'FazendasController@update');
// Route::delete('/fazendas/{fazenda}', 'FazendasController@destroy');

Route::resource('fazendas', 'FazendasController');
