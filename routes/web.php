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
    return view('/welcome');
 });

//controlador en rutas

//Route::get('/registro','CrudController@index');
//Route::get('/usuario','CrudController@obtenerUsuarios');
// Route::get('/detalles/(id)','CrudController@obtenerUsuarios');

 Route::group(['prefix' => '/crud'],function (){
     Route::get('registro','CrudController@index')->name('index');; //listo
     Route::get('usuarios','CrudController@obtenerUsuarios')->name('obtenerUsuarios');//listo
     Route::post('detalles','CrudController@detallesUsuarios')->name('detallesUsuario');//listo
     Route::patch('update/{id}','CrudController@updateUser')->name('updateUser');
     Route::post('save','CrudController@insertUser'); //listo
     Route::delete('destroy', 'CrudController@destroyUser');//listo
 });

