<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');

//Rutas Protegidas
Route::group(['middleware' => ['auth','verified']], function(){
	Route::get('/vacantes', 'VacanteController@index')->name('vacantes.index');
	Route::get('/vacantes/crear', 'VacanteController@create')->name('vacantes.create');
	Route::post('/vacantes', 'VacanteController@store')->name('vacantes.store');
	Route::get('/vacantes/{vacante}/editar', 'VacanteController@edit')->name('vacantes.edit');
	Route::put('/vacantes/{vacante}', 'VacanteController@update')->name('vacantes.update');

	//Eliminar vacante por axios
	Route::delete('/vacantes/{vacante}', 'VacanteController@destroy')->name('vacantes.destroy');
	
	//Ruta subir imagen
	Route::post('/vacantes/imagen', 'VacanteController@imagen')->name('vacantes.imagen');
	Route::post('/vacantes/borrarImagen', 'VacanteController@borrarImagen')->name('vacantes.borrar');
	
	// Cambiar estado de la vacante por axios
    Route::post('/vacantes/{vacante}', 'VacanteController@estado')->name('vacantes.estado');

	//Ruta de mostrar notificaciones
	Route::get('/notificaciones', 'NotificacionController')->name('notificaciones');
});

//Ruta de pagina de inicio
Route::get('/', 'InicioController')->name('inicio');

//Enviar datos para vacante
Route::get('/candidatos/{id}', 'CandidatoController@index')->name('candidatos.index');
Route::post('/candidatos', 'CandidatoController@store')->name('candidatos.store');


//Buscador de la pagina inicio
Route::get('/busqueda/buscar', 'VacanteController@resultados')->name('vacantes.resultados');

Route::post('/busqueda/buscar', 'VacanteController@buscar')->name('vacantes.buscar');

Route::get('/vacantes/{vacante}', 'VacanteController@show')->name('vacantes.show');

//Categorias de la pagina de inicio
Route::get('/categorias/{categoria}', 'CategoriaController@show')->name('categorias.show');
