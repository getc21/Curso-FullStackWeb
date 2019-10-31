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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return '<h1>Hola mundo con laravel</h1>';
});

Route::get('/pruebas/{nombre?}', function ($nombre=null) {
    $texto = '<h2>Texto desde una ruta</h2>';
    $texto .= 'Nombre: '.$nombre;
    
    return view('pruebas',array(
        'texto' => $texto
    ));
});

Route::get('/animales', 'PruebasController@index');
Route::get('/testOrm', 'PruebasController@testOrm');

//RUTAS DE LA API

/*METODOS HTTP COMUNES
 * GET: CONSEGUIR DATOS O RECURSOS
 * POST: GUARDAR DATOS O RECURSOS O HACER LOGICA DESDE UN FORMULARIO
 * PUT: ACTUALZIAR RECURSOS O DATOS
 * DELETE: ELIMINAR DATOS O RECURSOS
 */

//Rutas de prueba
Route::get('/entrada/pruebas', 'PostController@pruebas');
Route::get('/categoria/pruebas', 'CategoryController@pruebas');
Route::get('/usuario/pruebas', 'UserController@pruebas');

//Rutas del controllador de usuarios
Route::post('/api/register', 'UserController@register');
Route::post('/api/login', 'UserController@login');
Route::put('/api/user/update', 'UserController@update');
Route::post('/api/user/upload', 'UserController@upload');