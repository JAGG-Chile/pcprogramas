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

//Menú de Navegación
Route::view('/', 'welcome')->name('home');
Route::view('nosotros','nosotros')->name('acercade');
Route::view('servicios','servicios')->name('servicios');
Route::view('contacto','contacto')->name('contacto');
Route::view('contacto-respuesta','contacto-respuesta')->name('respuesta-contacto');

//Formularios
Route::post('contacto','MensajesController@store')->name('postcontacto');
