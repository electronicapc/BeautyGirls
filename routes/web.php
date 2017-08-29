<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Rutas para publicar productos
Route::get('/','InicioController@index');
Route::get('/single/{id}','InicioController@single')->where(['id' => '[0-9]+']);
Route::post('filmod','InicioController@filter');
Route::get('/home', 'HomeController@index');

Auth::routes();
//Rutas autenticadas
Route::group(['middleware' =>'auth'], function () {
	Route::match(['get', 'post'],'/admin', function () {
		return view('admin');
	});

	Route::match(['get', 'post'],'/inscribir', function () {
		return view('inscribir');
	});
	Route::post('/inscribirse', 'InicioController@inscribir');
	
	Route::get('/admin/addmmodel', 'AdminController@addmodel');
	Route::get('/admin/edtmodel', 'AdminController@edtmodel');
	Route::get('/admin/user', 'AdminController@user');
	Route::get('/admin/ventas', 'AdminController@ventas');

});
	//Fin rutas