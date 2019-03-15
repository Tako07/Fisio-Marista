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
    return view('login');
});

Route::get('/historiaClinica',function(){
  return view('historiaClinica');
});

Route::get('/historiaClinica/clinica',function(){
  return view('clinica');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/registroServidorSocial',function(){
  return view('registroServidorSocial');
});

Route::get('/registroMedico',function(){
  return view('registroMedico');
});

Route::get('/registroPasante',function(){
  return view('registroPasante');
});

Route::get('/datosPersonales',function(){
  return view('DatosPersonales');
});

