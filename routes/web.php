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

Route::get('/fazendas', 'FazendasController@index');
Route::get('/fazendas/create', 'FazendasController@create');
Route::post('/fazendas/store', 'FazendasController@store');
Route::get('/fazendas/edit', 'FazendasController@edit');
Route::put('/fazendas/update', 'FazendasController@update');

// Route::resource('fazendas', 'FazendasController');
