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
)->name('home');

Route::get(
    '/admin',
    'FrontController@administrador'
)->name('admin');
Route::get('/user/{user}', 'PublicController@usuario')->name('usuario');
Route::get('/genero/{genero}', 'PublicController@genero')->name('genero');
Route::get('/s/', 'PublicController@search')->name('search');

Route::get(
    '/{id}',
    'PublicController@descarga'
)->name('descarga');