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
