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
Route::get('/contacto', function () {
	return view('contact');
});
//Rutas de pago
Route::get('/pay/{id}/{pago}/{time}','InicioController@payu')->where(['id' => '[1-9]+'],['pago' => '[1-9]+'],['time' => '[1-9]+']);
Route::post('/payfull','InicioController@formpayu');
//RUtas de contacto
Route::post('contacto','InicioController@contacto');
//Ruta de comandos
Route::get('/command', function () {
	Artisan::call('command:payVerified');
});
Auth::routes();
//Rutas autenticadas
Route::group(['middleware' =>'auth'], function () {
	Route::match(['get', 'post'],'/inscribir', function () {
		return view('inscribir');
	});
	Route::post('/inscribirse', 'InicioController@inscribir');
	
	//Rutas administrativas
	Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
	{
		Route::match(['get', 'post'],'/admin', function () {
			return view('admin');
		});
		Route::get('/admin/addmodel', 'AdminController@addmodel');
		Route::get('/admin/edtmodel', 'AdminController@edtmodel');
		Route::get('/admin/user', 'AdminController@user');
		Route::get('/admin/ventas', 'AdminController@ventas');
		//Anadir modelos
		Route::get('/admin/modelos/add', function () {
			return view('admod');
		});
		Route::post('/admin/modelos/add', 'AdminController@addmods');
		Route::get('/admin/modelos/{id}', 'AdminController@edtmods')->where(['id' => '[0-9]+']);
		Route::post('/admin/modelos/edicion', 'AdminController@edtmosv');
		
		//Usuarios
		Route::get('/admin/user/{id}/{isAdmin}', 'AdminController@addmin')->where(['id' => '[0-9]+']);
		
		//Ventas o pagos
		Route::get('/admin/modelos/pago/{id}', 'AdminController@pagpm')->where(['id' => '[0-9]+']);
		Route::post('/admin/modelos/pago/edicionp', 'AdminController@svpay');
	});

});



	//Fin rutas