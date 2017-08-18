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

Route::get(
    '/',
    'PublicController@canciones'
);
Route::get(
    '/{id}',
    'PublicController@descarga'
)->name('descarga');
Route::get(
    '/admin',
    'FrontController@administrador'
);
Route::get('/user/{user}', 'PublicController@usuario');
