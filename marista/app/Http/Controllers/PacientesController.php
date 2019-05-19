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

    $ant_fam=array("Enfermedades reumatológicas" =>array("condición"=>$request->reumatologico,"familiar"=>$request->quien_reumatologico,"cuál"=>$request->cuál_reumatologico),
      "Enfermedades del sistema nervioso"=>array("condición"=>$request->nervioso,"familiar"=>$request->quien_nervioso,"cuál"=>$request->cuál_nervioso),
      "Síndromes"=>array("condición"=>$request->sindrome,"familiar"=>$request->quien_sindrome,"cuál"=>$request->cuál_sindrome),
      "Malformaciones"=>array("condición"=>$request->malformacion,"familiar"=>$request->quien_malformacion,"cuál"=>$request->cuál_malformacion),
      "Diabetes"=>array("condición"=>$request->diabetes,"familiar"=>$request->quien_diabetes,"cuál"=>$request->cuál_diabetes),
      "Hipertensión arterial sistemática"=>array("condición"=>$request->has,"familiar"=>$request->quien_has,"cuál"=>$request->cuál_has),
      "Cáncer"=>array("condición"=>$request->cancer,"familiar"=>$request->quien_cancer,"cuál"=>$request->cuál_cancer),
      "Cardiopatías"=>array("condición"=>$request->cardiopatia,"familiar"=>$request->quien_cardiopatia,"cuál"=>$request->cuál_cardiopatia),
      "Vasculares"=>array("condición"=>$request->vascular,"familiar"=>$request->quien_vascular,"cuál"=>$request->cuál_vascular),
      "Pulmonares"=>array("condición"=>$request->pulmonar,"familiar"=>$request->quien_pulmonar,"cuál"=>$request->cuál_pulmonar),
      "Heptopatías"=>array("condición"=>$request->heptopatia,"familiar"=>$request->quien_heptopatia,"cuál"=>$request->cuál_heptopatia),
      "Nefropatías"=>array("condición"=>$request->nefropatia,"familiar"=>$request->quien_nefrotapia,"cuál"=>$request->cuál_nefropatia),
      "Digestivos"=>array("condición"=>$request->digestivo,"familiar"=>$request->quien_digestivo,"cuál"=>$request->cuál_digestivo),
      "Endocrinopatías"=>array("condición"=>$request->endocri,"familiar"=>$request->quien_endocri,"cuál"=>$request->cuál_endocri),
      "Transtornos hematológicos"=>array("condición"=>$request->hematologico,"familiar"=>$request->quien_hematologico,"cuál"=>$request->cuál_hematologico),
      "Dislipidemias"=>array("condición"=>$request->disli,"familiar"=>$request->quien_disli,"cuál"=>$request->cuál_disli),
      "Otros"=>array("condición"=>$request->otros,"familiar"=>$request->quien_otros,"cuál"=>$request->cuál_otros)
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
    $ant_no_pat=array("Tipo de contrucción no favorable"=>array("condición"=>$request->construc,"cuál"=>$request->cuál_construc),
      "Suelo no regular"=>array("condición"=>$request->suelo,"cuál"=>$request->cuál_suelo),
      "Escaleras que dificulten actividades de la vida diaria (avd)"=>array("condición"=>$request->escalera,"cuál"=>$request->cuál_escalera),
      "Ventilación inadecuada"=>array("condición"=>$request->ventilacion,"cuál"=>$request->cuál_ventilacion),
      "Hacinamiento"=>array("condición"=>$request->hacina,"cuál"=>$request->cuál_hacina),
      "Adaptaciones para sus avd"=>array("condición"=>$request->adaptaciones,"cuál"=>$request->cuál_adaptaciones),
      "Servicios de agua"=>array("condición"=>$request->agua,"cuál"=>$request->cuál_agua),
      "Servicio de luz"=>array("condición"=>$request->luz,"cuál"=>$request->cuál_luz),
      "Servicio de drenaje inadecuado"=>array("condición"=>$request->drenaje,"cuál"=>$request->cuál_drenaje),
      "Hábitos personales de baño"=>array("condición"=>$request->habito,"cuál"=>$request->cuál_habito),
      "Higiene bucal"=>array("condición"=>$request->bucal,"cuál"=>$request->cuál_bucal),
      "Defecación"=>array("condición"=>$request->popis,"cuál"=>$request->cuál_popis),
      "Tabaquismo"=>array("condición"=>$request->tabaco,"cuál"=>$request->cuál_tabaco),
      "Alcoholismo"=>array("condición"=>$request->alcohol,"cuál"=>$request->cuál_alcohol),
      "Toxicomanías"=>array("condición"=>$request->droga,"cuál"=>$request->cuál_droga),
      "Alimentación"=>array("condición"=>$request->comida,"cuál"=>$request->cuál_comida),
      "Trabajo-Descanso"=>array("condición"=>$request->trabajo,"cuál"=>$request->cuál_trabajo),
      "Pasatiempo"=>array("condición"=>$request->pasa,"cuál"=>$request->cuál_pasa)
    );
    $ant_pat=array("Enfermedades de la infancia"=>array("condición"=>$request->infancia,"cuál"=>$request->cuál_infancia),
      "Quirúrgicas"=>array("condición"=>$request->intervencion,"cuál"=>$request->cuál_intervencion),
      "Traumatismos"=>array("condición"=>$request->traumatismo,"cuál"=>$request->cuál_traumatismo),
      "Infiltraciones"=>array("condición"=>$request->infiltracion,"cuál"=>$request->cuál_infiltracion),
      "Hostpitalizaciones"=>array("condición"=>$request->hospital,"cuál"=>$request->cuál_hospital),
      "Perdida de conocimiento"=>array("condición"=>$request->conocimiento,"cuál"=>$request->cuál_conocimiento),
      "Intolerancia a medicamentos"=>array("condición"=>$request->intolerancia,"cuál"=>$request->cuál_intolerancia),
      "Transfuciones"=>array("condición"=>$request->transfucion,"cuál"=>$request->cuál_transfucion),
      "Medicamentos"=>array("condición"=>$request->medi,"cuál"=>$request->cuál_medi),
      "ETS"=>array("condición"=>$request->ets,"cuál"=>$request->cuál_ets)
    );
    $ant_gineco=array("Menarca"=>array("condición"=>$request->menarca,"cuantos"=>$request->cant_menaca,"Fecha"=>$request->cuál_menaca),
      "Ritmo menstrual"=>array("condición"=>$request->mens,"cuantos"=>$request->cant_mens,"Fecha"=>$request->cuál_mens),
      "Partos"=>array("condición"=>$request->parto,"cuantos"=>$request->cant_parto,"Fecha"=>$request->cuál_parto),
      "Abortos"=>array("condición"=>$request->aborto,"cuantos"=>$request->cant_aborto,"Fecha"=>$request->cuál_aborto),
      "Cesarea"=>array("condición"=>$request->cesarea,"cuantos"=>$request->cant_cesarea,"Fecha"=>$request->cuál_cesarea),
      "Métodos anticonceptivos"=>array("condición"=>$request->anti,"cuantos"=>$request->cant_anti,"Fecha"=>$request->cuál_anti)
    );
    if($paciente->id_paciente>0){
      historia_clinica::where('id_paciente',$paciente->id_paciente)->update(['ant_pers_no_pat'=>json_encode($ant_no_pat),'ant_pers_pat'=>json_encode($ant_pat),'ant_gineco_obs'=>json_encode($ant_gineco)]);
      return redirect()->route('showHistoriaClinica');
    }
  }
}
