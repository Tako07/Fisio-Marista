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

Route::get('/historiaClinica/ant_fam',function(){
  return view('antecedentes_familiares');
});

Route::get('/historiaClinica/ant_pers',function(){
  return view('antecedentes_personales');
});

Route::get('/historiaClinica/nuevo_pad',function(){
  return view('nuevo_padecimiento');
});

Route::get('/historiaClinica/sintomas',function(){
  return view('sintomas');
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
