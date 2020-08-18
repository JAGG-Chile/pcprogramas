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

//Página principal
Route::get('/', function () {
    return view('welcome');
});

// páginas estáticas
Route::get('/nosotros',function(){
    return view('nosotros');
});
Route::get('/servicios',function(){
    return view('servicios');
});
Route::get('/contacto',function(){
    return view('contacto');
});
