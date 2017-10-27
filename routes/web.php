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

Route::get('/','PublicController@canciones')->name('home');
Route::prefix('admin')->group(function(){
  Route::get('/','FrontController@administrador')->name('admin');
  Route::get('user', 'UserController@index')->name('admin_users');
  Route::get('user/{id}/files', 'UserController@files')->name('user_files');
  Route::get('upload', 'FileController@index')->name('upload');
  Route::post('store', 'FileController@store')->name('file.store');
  Route::get('files', 'UserController@myfiles')->name('myfiles');

});
Route::get('/user/{user}', 'PublicController@usuario')->name('usuario');
Route::get('/genero/{genero}', 'PublicController@genero')->name('genero');
Route::get('/s/', 'PublicController@search')->name('search');

Route::get('/{id}','PublicController@descarga')->name('descarga');
