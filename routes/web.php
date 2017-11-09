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

Route::group(['prefix' => 'pessoas'], function () {
  Route::get('/', 'PessoasController@index')->name('home');
  Route::get('/novo', 'PessoasController@novoView')->name('novo');
  Route::get("/{id}/editar", 'PessoasController@editarView')->name('edit');
  Route::get("/{id}/excluir", 'PessoasController@excluirView')->name('delete');
  Route::get("/{id}/destroy", 'PessoasController@destroy')->name('destroy');
  Route::post('/store', 'PessoasController@store')->name('cadastro');
  Route::post('/update', 'PessoasController@update')->name('update');
});

Route::get('/', function () {
  return redirect()->route('home');
});
