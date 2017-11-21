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
Route::resource('usuario', 'UserController');
Route::resource('carro', 'CarroController');
Route::resource('chofer', 'ChoferController');
Route::get('usuario/editar/{id}', [
	'uses'	=>'UserController@editar',
	'as'	=>'usuario.editar'
]);