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
})->name('verlogin');

Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/cerrar_sesion','Auth\LoginController@logout')->name('logout');

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/historiaClinica/{paciente}','HistoriaClinicaController@showPaciente')
->name('showHistoriaPaciente')
->where(['paciente' => '[0-9]+']);

Route::get('/historiaClinica/diagnostico/{paciente}','HistoriaClinicaController@showDiagnostico')
->name('showDiagnoticoPaciente')
->where(['paciente' => '[0-9]+']);

Route::post('/guarda/mapa','HistoriaClinicaController@guardaMapa')->name('guardaMapa');

Route::get('/historiaClinica/actual/{paciente}/{diagnostico}','HistoriaClinicaController@showDiagnosticoActual')
->name('showDiagnosticoActual')
->where(['paciente' => '[0-9]+','diagnostico'=>'[0-9]+']);

Route::get('/historiaClinica','HistoriaClinicaController@index')->name('showHistoriaClinica');

Route::post('/nuevaHistoria','DiagnosticoController@guardaDiagnostico')
->name('guardaDiagnostico');

Route::get('/nuevaHistoria/{paciente}','DiagnosticoController@nuevoDiagnostico')
->name('nuevoDiagnostico')
->where(['paciente' => '[0-9]+']);



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

Route::get('/registroMedico','MedicoController@showRegistro')->name('registroMedico');

Route::post('/registroMedico','MedicoController@registro')->name('insertarMedico');

Route::get('/registroPasante',function(){
  return view('registroPasante');
});

Route::get('/datosPersonales','DatosPersonalesController@index')->name('showDatosPersonales');

Route::get('/datosPersonalesAdmin','DatosPersonalesController@admin')->name('showDatosPersonalesAdmin');

Route::get('/pacientes','PacientesController@index')->name('showPacientes');

Route::get('/altaPaciente/{pacietne}/{diagnostico}','HistoriaClinicaController@alta')
->name('altaPaciente')
->where(['paciente'=>'[0-9]+','diagnostico'=>'[0-9]+']);


Route::post('/pacientes','PacientesController@registrarPaciente')->name('registrarPaciente');

Route::post('anteceedentes1','PacientesController@registroAntecedentesFamiliares')->name('ant_fam_registro');
Route::post('anteceedentes2','PacientesController@registroAntecedentesPersonales')->name('ant_pers_registro');
//Route::get('/auxiliar',function (){
  //$curp=0;
  //return view ('antecedentes_familiares',compact('curp'));
//});

Route::post('/pacientes/{x}','PacientesController@modificaPaciente')->name('modificaPaciente');

Route::post('/registroUsuario','DatosPersonalesController@registrarUsuario')->name('registrarUsuario');


Route::get('/Consulta','ConsultaController@index')->name('showConsuta');

Route::get('/calendario','CitaController@index')->name('showCalendario');

Route::get('/cita', function () {
  return view('cita');
});

Route::post('/calendario','CitaController@registrarCita')->name('registrarCita');

Route::post('/calendario/{id}','CitaController@bajaCita')->name('bajaCita');
