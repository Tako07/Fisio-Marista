<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paciente;
use App\Models\historia_clinica;
use DB;

class PacientesController extends Controller
{
  public function index(Request $request){

    if($request->paciente != ''){
        $pacientes=paciente::select('paciente.*')->where('curp', 'LIKE', $request->paciente.'%')->orWhereRaw('CONCAT(nombres," ",apaterno,amaterno) LIKE ?', '%'.$request->paciente.'%')->get();
    }
    else
        $pacientes=paciente::select('paciente.*')->get();
    $cont=1;
    $curp=0;
    return view('pacientes',compact(['pacientes','cont','curp']));
  }

  public function modificaPaciente(Request $request, $x){

        $paciente = Paciente::find($request->input('inputIdPacienteAct'));
        $paciente->calle=$request->input('calleAct');
        $paciente->colonia=$request->input('coloniaAct');
        $paciente->codigo_postal=$request->input('cpAct');
        $paciente->num_cel=$request->input('celularAct');
        $paciente->religion=$request->input('religionAct');
        $paciente->familiar_a_cargo=$request->input('familiarAct');
        $paciente->num_tel=$request->input('telefonoAct');
        $paciente->save();

        $pacientes=Paciente::select('paciente.*')->get();
        $cont=1;
        return view('pacientes',compact(['pacientes','cont']));
    }

  public function registrarPaciente(Request $request){

    $paciente= new paciente();
    $paciente->nombres=$request->nombre;
    $paciente->apaterno=$request->apaterno;
    $paciente->amaterno=$request->amaterno;
    $paciente->edad=$request->edad;
    $paciente->curp=$request->curp;
    $paciente->sexo=$request->radioSexo;
    $paciente->nacionalidad=$request->nacionalidad;
    $paciente->edo_civil=$request->radioEdo;
    $paciente->ocupacion=$request->ocupacion;
    $paciente->calle=$request->calle;
    $paciente->colonia=$request->colonia;
    $paciente->codigo_postal=$request->cp;
    $paciente->num_cel=$request->celular;
    $paciente->religion=$request->religion;
    $paciente->familiar_a_cargo=$request->familiar;
    $paciente->num_tel=$request->telefono;
    $paciente->save();

    $pacientes=paciente::select('nombres','apaterno','amaterno','calle','colonia','ocupacion','edad')->get();
    $cont=1;
    $curp=$paciente->curp;
    $id_paciente=paciente::select('id_paciente')->where('curp',$curp)->first();
    $historia_paciente= new historia_clinica();
    $historia_paciente->id_paciente=$id_paciente->id_paciente;
    $historia_paciente->save();

    //return view('mapaDolor');
    return view('antecedentes_familiares',compact(['pacientes','cont','curp']));
  }

  public function registroAntecedentesFamiliares(Request $request){
    $curp=$request->curp;
    $paciente=paciente::select('id_paciente')->where('curp',$curp)->first();

    $ant_fam=array("Enfermedades reumatologicas" =>array("condicion"=>$request->reumatologico,"familiar"=>$request->quien_reumatologico,"cual"=>$request->cual_reumatologico),
      "Enfermedades del sistema nervioso"=>array("condicion"=>$request->nervioso,"familiar"=>$request->quien_nervioso,"cual"=>$request->cual_nervioso),
      "Sindromes"=>array("condicion"=>$request->sindrome,"familiar"=>$request->quien_sindrome,"cual"=>$request->cual_sindrome),
      "Malformaciones"=>array("condicion"=>$request->malformacion,"familiar"=>$request->quien_malformacion,"cual"=>$request->cual_malformacion),
      "Diabetes"=>array("condicion"=>$request->diabetes,"familiar"=>$request->quien_diabetes,"cual"=>$request->cual_diabetes),
      "Hipertension arterial sistematica"=>array("condicion"=>$request->has,"familiar"=>$request->quien_has,"cual"=>$request->cual_has),
      "Cancer"=>array("condicion"=>$request->cancer,"familiar"=>$request->quien_cancer,"cual"=>$request->cual_cancer),
      "Cardiopatias"=>array("condicion"=>$request->cardiopatia,"familiar"=>$request->quien_cardiopatia,"cual"=>$request->cual_cardiopatia),
      "Vasculares"=>array("condicion"=>$request->vascular,"familiar"=>$request->quien_vascular,"cual"=>$request->cual_vascular),
      "Pulmonares"=>array("condicion"=>$request->pulmonar,"familiar"=>$request->quien_pulmonar,"cual"=>$request->cual_pulmonar),
      "Heptopatias"=>array("condicion"=>$request->heptopatia,"familiar"=>$request->quien_heptopatia,"cual"=>$request->cual_heptopatia),
      "Nefropatias"=>array("condicion"=>$request->nefropatia,"familiar"=>$request->quien_nefrotapia,"cual"=>$request->cual_nefropatia),
      "Digestivos"=>array("condicion"=>$request->digestivo,"familiar"=>$request->quien_digestivo,"cual"=>$request->cual_digestivo),
      "Endocrinopatias"=>array("condicion"=>$request->endocri,"familiar"=>$request->quien_endocri,"cual"=>$request->cual_endocri),
      "Transtornos hematologicos"=>array("condicion"=>$request->hematologico,"familiar"=>$request->quien_hematologico,"cual"=>$request->cual_hematologico),
      "Dislipidemias"=>array("condicion"=>$request->disli,"familiar"=>$request->quien_disli,"cual"=>$request->cual_disli),
      "Otros"=>array("condicion"=>$request->otros,"familiar"=>$request->quien_otros,"cual"=>$request->cual_otros)
    );

    if($paciente->id_paciente>0){
      historia_clinica::where('id_paciente',$paciente->id_paciente)->update(['ant_heredo_fam'=>json_encode($ant_fam)]);
      return view('antecedentes_personales',compact('curp'));
    }
    else return back();
  }
  public function registroAntecedentesPersonales(Request $request){
    $curp=$request->curp;
    $paciente=paciente::select('id_paciente')->where('curp',$curp)->first();
    $ant_no_pat=array("Tipo de contrsuccion no favorable"=>array("condicion"=>$request->construc,"cual"=>$request->cual_construc),
      "Suelo no regular"=>array("condicion"=>$request->suelo,"cual"=>$request->cual_suelo),
      "Escaleras que dificulten actividades de la vida diaria (avd)"=>array("condicion"=>$request->escalera,"cual"=>$request->cual_escalera),
      "Ventilacion inadecuada"=>array("condicion"=>$request->ventilacion,"cual"=>$request->cual_ventilacion),
      "Hacinamiento"=>array("condicion"=>$request->hacina,"cual"=>$request->cual_hacina),
      "Adaptaciones para sus avd"=>array("condicion"=>$request->adaptaciones,"cual"=>$request->cual_adaptaciones),
      "Servicios de agua"=>array("condicion"=>$request->agua,"cual"=>$request->cual_agua),
      "Servicio de luz"=>array("condicion"=>$request->luz,"cual"=>$request->cual_luz),
      "Servicio de drenaje inadecuado"=>array("condicion"=>$request->drenaje,"cual"=>$request->cual_drenaje),
      "Habitos personales de baño"=>array("condicion"=>$request->habito,"cual"=>$request->cual_habito),
      "Higiene bucal"=>array("condicion"=>$request->bucal,"cual"=>$request->cual_bucal),
      "Defecacion"=>array("condicion"=>$request->popis,"cual"=>$request->cual_popis),
      "Tabaquismo"=>array("condicion"=>$request->tabaco,"cual"=>$request->cual_tabaco),
      "Alcoholismo"=>array("condicion"=>$request->alcohol,"cual"=>$request->cual_alcohol),
      "Toxicomanías"=>array("condicion"=>$request->droga,"cual"=>$request->cual_droga),
      "Alimentacion"=>array("condicion"=>$request->comida,"cual"=>$request->cual_comida),
      "Trabajo-descanso"=>array("condicion"=>$request->trabajo,"cual"=>$request->cual_trabajo),
      "Pasatiempo"=>array("condicion"=>$request->pasa,"cual"=>$request->cual_pasa)
    );
    $ant_pat=array("enfermedades_infancia"=>array("condicion"=>$request->infancia,"cual"=>$request->cual_infancia),
      "quirurgicas"=>array("condicion"=>$request->intervencion,"cual"=>$request->cual_intervencion),
      "traumatismos"=>array("condicion"=>$request->traumatismo,"cual"=>$request->cual_traumatismo),
      "infiltraciones"=>array("condicion"=>$request->infiltracion,"cual"=>$request->cual_infiltracion),
      "hostpitalizaciones"=>array("condicion"=>$request->hospital,"cual"=>$request->cual_hospital),
      "perdida de conocimiento"=>array("condicion"=>$request->conocimiento,"cual"=>$request->cual_conocimiento),
      "intolerancia a medicamentos"=>array("condicion"=>$request->intolerancia,"cual"=>$request->cual_intolerancia),
      "Transfuciones"=>array("condicion"=>$request->transfucion,"cual"=>$request->cual_transfucion),
      "Medicamentos"=>array("condicion"=>$request->medi,"cual"=>$request->cual_medi),
      "ETS"=>array("condicion"=>$request->ets,"cual"=>$request->cual_ets)
    );
    $ant_gineco=array("Menarca"=>array("condicion"=>$request->menarca,"cuantos"=>$request->cant_menaca,"Fecha"=>$request->cual_menaca),
      "Ritmo menstrual"=>array("condicion"=>$request->mens,"cuantos"=>$request->cant_mens,"Fecha"=>$request->cual_mens),
      "Partos"=>array("condicion"=>$request->parto,"cuantos"=>$request->cant_parto,"Fecha"=>$request->cual_parto),
      "Abortos"=>array("condicion"=>$request->aborto,"cuantos"=>$request->cant_aborto,"Fecha"=>$request->cual_aborto),
      "Cesarea"=>array("condicion"=>$request->cesarea,"cuantos"=>$request->cant_cesarea,"Fecha"=>$request->cual_cesarea),
      "Metodos anticonceptivos"=>array("condicion"=>$request->anti,"cuantos"=>$request->cant_anti,"Fecha"=>$request->cual_anti)
    );
    if($paciente->id_paciente>0){
      historia_clinica::where('id_paciente',$paciente->id_paciente)->update(['ant_pers_no_pat'=>json_encode($ant_no_pat),'ant_pers_pat'=>json_encode($ant_pat),'ant_gineco_obs'=>json_encode($ant_gineco)]);
      return redirect()->route('showHistoriaClinica');
    }
  }
}
