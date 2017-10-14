<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/auto','AutosController@index');
Route::get('/auto/nuevo','AutosController@create');
Route::post('/auto/crear','AutosController@store');
Route::get('/auto/editar/{$id}','AutosController@edit');
Route::post('/auto/actualizar','AutosController@update');
Route::get('/auto/eliminar/{$id}','AutosController@destroy');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
