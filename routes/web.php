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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Secciones
Route::get('/s/{slug}', 'SeccionesController@MuestraSeccion')->name('muestra.seccion');


Route::group(['middleware' => 'auth'], function () {
    ////////////////////////////////////////////////////////////////////////
	// Administracion

	Route::get('/administracion', 'Administracion\AdministracionController@index')->name('administracion.index');	

	// Artículos
	Route::get('/administracion/articulos', 'Administracion\ArticulosController@index')->name('articulos.index');
	Route::get('/administracion/articulo/{id}', 'Administracion\ArticulosController@articulo')->name('articulos.articulo');
});

/*Route::get('/pruebatiny', 'Administracion\AdministracionController@tinymce')->name('administracion.tinymce');
Route::post('/pruebatiny/grabar','Administracion\AdministracionController@grabartinymce')->name('administracion.grabartinymce'); */

/* Route::get('/carga', 'Administracion\AdministracionController@carga')->name('administracion.carga');
Route::post('/carga/procesar', 'Administracion\AdministracionController@procesar')->name('administracion.procesar'); */

//Route::post('/file-upload', 'FileController@upload')->middleware('auth');