<?php

namespace fisioterapia\Http\Controllers;

use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //GUARDAR PACIENTE

        DB::table('paciente')->insert([
            "nombres" => $request->input('nombres'),
            "ap_Pat" => $request->input('apPat'),
            "ap_Mat" => $request->input('apMat'),
            "edad" => $request->input('edad'),
            "sexo" => $request->input('radioSexo'),
            "fecha_nacimiento" => $request->input('fechaNacimiento'),
            "nacionalidad" => $request->input('nacionalidad'),
            "edo_Civil" => $request->input('edoCivil'),
            "ocupacion" => $request->input('ocupacion'),
            "calle_Numero" => $request->input('calleNumero'),
            "colonia" => $request->input('colonia'),
            "cp" => $request->input('cp'),
            "num_cel" => $request->input('celular'),
            "religion" => $request->input('religion'),
            "nombre_Familiar" => $request->input('nombreFamiliar'),
            "celular_Familiar" => $request->input('celularFam'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        //REDIRECCIONAR Y ENVIAR LOS PACIENTES
        $pacientes = DB::table('paciente')->get();
        return view('pacientes', compact('pacientes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
