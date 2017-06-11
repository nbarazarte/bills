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

Route::group(['middleware' => 'auth'], function () {

	Route::get('/', [
		'uses' => 'HomeController@index',
		'as' =>'home'
	]);

	Route::group(['middleware' => 'administrador'], function () {

	//Para los Usuarios del Sistema:
		
		//Crear Usuario:
		Route::get('Crear-Cuenta', [
						'uses' => 'HomeController@crearCuenta',
						'as' =>'registrar'
		]);

		Route::post('Crear-Cuenta', 'HomeController@postCrearCuenta');

		//Buscar usuarios:
		Route::get('Buscar-Cuenta', [
						'uses' => 'HomeController@buscarCuenta',
						'as' =>'buscarCuenta'
		]);

		//Ver Usuario:
		Route::get('Ver-Cuenta-{id}', [
						'uses' => 'HomeController@verCuenta',
						'as' =>'cuenta'
		]);

		//Editar Usuario
		Route::post('Editar-Cuenta', [
						'uses' => 'HomeController@editarCuenta',
						'as' =>'editarCuenta'
		]);

		//Editar Imágen
		Route::post('Editar-Imagen', [
						'uses' => 'HomeController@editarImagen',
						'as' =>'editarImagen'
		]);

		//Eliminar Cuenta
		Route::post('Eliminar-Cuenta', [
						'uses' => 'HomeController@eliminarCuenta',
						'as' =>'eliminarCuenta'
		]);

		//Eliminar Imágen
		Route::post('Eliminar-Imagen', [
						'uses' => 'HomeController@eliminarImagen',
						'as' =>'eliminarImagen'
		]);

		//Route::get('Ver-Cuenta/{id}','HomeController@verCuenta2');

		//Cambia el estatus del usuario por ajax en la Función "estatusUsuario(id,estatus)" en custom.js
		Route::get('usuario/{id}/estatus/{estatus}','HomeController@estatusUsuario');

	 });

	//Para el Equipo de Ilernus:

		//Crear Director o Gerente:
		Route::get('Crear-Equipo-iLernus', [
						'uses' => 'EquipoIlernusController@crearCuenta',
						'as' =>'registrarPi'
		]);

		Route::post('Crear-Equipo-iLernus', 'EquipoIlernusController@postCrearCuenta');

		//Buscar Director o Gerente:
		Route::get('Buscar-Equipo-iLernus', [
						'uses' => 'EquipoIlernusController@buscarCuenta',
						'as' =>'buscarCuentaPi'
		]);

		//Ver Director o Gerente:
		Route::get('Ver-Equipo-iLernus-{id}', [
						'uses' => 'EquipoIlernusController@verCuenta',
						'as' =>'cuentaPi'
		]);

		//Editar Director o Gerente
		Route::post('Editar-Equipo-iLernus', [
						'uses' => 'EquipoIlernusController@editarCuenta',
						'as' =>'editarCuentaPi'
		]);

		//Editar Director o Gerente
		Route::post('Editar-Imagen-Equipo-iLernus', [
						'uses' => 'EquipoIlernusController@editarImagen',
						'as' =>'editarImagenPi'
		]);

		//Eliminar Director o Gerente
		Route::post('Eliminar-Cuenta-Equipo-iLernus', [
						'uses' => 'EquipoIlernusController@eliminarCuenta',
						'as' =>'eliminarCuentaPi'
		]);

		//Eliminar Director o Gerente
		Route::post('Eliminar-Imagen-Persona-Ilernus', [
						'uses' => 'EquipoIlernusController@eliminarImagen',
						'as' =>'eliminarImagenPi'
		]);

	//Para los Instructores de Ilernus:

		//Crear Instructores:
		Route::get('Crear-Instructor-iLernus', [
						'uses' => 'InstructoresIlernusController@crearCuenta',
						'as' =>'registrarIns'
		]);

		Route::post('Crear-Instructor-iLernus', 'InstructoresIlernusController@postCrearCuenta');

		//Buscar Instructores:
		Route::get('Buscar-Instructor-iLernus', [
						'uses' => 'InstructoresIlernusController@buscarCuenta',
						'as' =>'buscarCuentaIns'
		]);

		//Ver Instructores:
		Route::get('Ver-Instructor-iLernus-{id}', [
						'uses' => 'InstructoresIlernusController@verCuenta',
						'as' =>'cuentaIns'
		]);

		//Editar Instructores
		Route::post('Editar-Instructor-iLernus', [
						'uses' => 'InstructoresIlernusController@editarCuenta',
						'as' =>'editarCuentaIns'
		]);

		//Editar Instructores
		Route::post('Editar-Imagen-Instructor-iLernus', [
						'uses' => 'InstructoresIlernusController@editarImagen',
						'as' =>'editarImagenIns'
		]);

		//Eliminar Instructores
		Route::post('Eliminar-Cuenta-Instructor-iLernus', [
						'uses' => 'InstructoresIlernusController@eliminarCuenta',
						'as' =>'eliminarCuentaIns'
		]);

		//Eliminar Instructores
		Route::post('Eliminar-Imagen-Instructor-iLernus', [
						'uses' => 'InstructoresIlernusController@eliminarImagen',
						'as' =>'eliminarImagenIns'
		]);

	//Para los Autores de iLernus:

		//Crear Autor:
		Route::get('Crear-Autor-iLernus', [
						'uses' => 'AutoresIlernusController@crearCuenta',
						'as' =>'registrarAu'
		]);

		Route::post('Crear-Autor-iLernus', 'AutoresIlernusController@postCrearCuenta');

		//Buscar Autor:
		Route::get('Buscar-Autor-iLernus', [
						'uses' => 'AutoresIlernusController@buscarCuenta',
						'as' =>'buscarCuentaAu'
		]);

		//Ver Autor:
		Route::get('Ver-Autor-iLernus-{id}', [
						'uses' => 'AutoresIlernusController@verCuenta',
						'as' =>'cuentaAu'
		]);

		//Editar Autor
		Route::post('Editar-Autor-iLernus', [
						'uses' => 'AutoresIlernusController@editarCuenta',
						'as' =>'editarCuentaAu'
		]);

		//Editar Autor
		Route::post('Editar-Imagen-Autor-iLernus', [
						'uses' => 'AutoresIlernusController@editarImagen',
						'as' =>'editarImagenAu'
		]);

		//Eliminar Autor
		Route::post('Eliminar-Cuenta-Autor-iLernus', [
						'uses' => 'AutoresIlernusController@eliminarCuenta',
						'as' =>'eliminarCuentaAu'
		]);

		//Eliminar Autor
		Route::post('Eliminar-Imagen-Autor-iLernus', [
						'uses' => 'AutoresIlernusController@eliminarImagen',
						'as' =>'eliminarImagenAu'
		]);

























 });

Route::get('Recuperar-Clave', [
				'uses' => 'HomeController@getRecuperar',
				'as' =>'recuperar'
]);

Route::post('Recuperar-Clave', 'HomeController@postRecuperar');

Route::get('Acceso-Restringido', [
				'uses' => 'HomeController@denegado',
				'as' =>'denegado'
]);

// Authentication routes...
Route::get('/Entrar', [
				'uses' => 'Auth\AuthController@getLogin',
				'as' =>'login'
]);
Route::post('/Entrar', [
				'uses' => 'Auth\AuthController@postLogin',
				'as' =>'login'
]);
Route::get('Salir', [
				'uses' => 'Auth\AuthController@getLogout',
				'as' =>'logout'
]);
