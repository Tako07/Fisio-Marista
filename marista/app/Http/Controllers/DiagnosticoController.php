<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\diagnostico;
use App\Models\alta;

class DiagnosticoController extends Controller
{
    public function nuevoDiagnostico($paciente){
      $activo=diagnostico::where('id_paciente',$paciente)->get()->first();
      if($activo==null){
        return view('nuevo_padecimiento',compact('paciente'));
      }
      $activo=diagnostico::select('activo')->where('id_paciente',$paciente)->get();
      foreach ($activo as $activo) {
        if($activo->activo!=0){
          $diagnosticos=diagnostico::select('id_diagnostico','diagnostico','pronostico','activo')->where('id_paciente',$paciente)->get();
          return view('diagnosticos',compact(['paciente','diagnosticos']));
        }
        return view('nuevo_padecimiento',compact('paciente'));
      }
    }
    public function guardaDiagnostico(Request $request){

      $padecimiento_actual=array("inicio"=>$request->inicio,"eva inicio"=>$request->eva,"evolucion"=>"","eva evolucion"=>"","actual"=>"","eva actual"=>"");
      $sintomas_generales=array("Astenia"=>$request->astenia,"Adinamia"=>$request->andinamia,"Anorexia"=>$request->anorexia,"Fiebre"=>$request->fiebre,"Perdida de peso"=>$request->perdida_peso);
      $aparatos=array("Aparato digestivo"=>array("condicion"=>$request->digestivo,"cual"=>$request->cual_digestivo),
                "Aparato cardiovascular"=>array("condicion"=>$request->cardiovascular,"cual"=>$request->cual_cardiovascular),
                "Aparato respiratorio"=>array("condicion"=>$request->respiratorio,"cual"=>$request->cual_respiratorio),
                "Aparato urinario"=>array("condicion"=>$request->urinario,"cual"=>$request->cual_urinario),
                "Aparato genital"=>array("condicion"=>$request->genital,"cual"=>$request->cual_genital),
                "Aparato hematologico"=>array("condicion"=>$request->hema,"cual"=>$request->cual_hema),
                "Sistema endocrino"=>array("condicion"=>$request->endocrino,"cual"=>$request->cual_edocrino),
                "Sistema nervioso"=>array("condicion"=>$request->nervioso,"cual"=>$request->cual_nervioso),
                "Sistema sensorial"=>array("condicion"=>$request->sensorial,"cual"=>$request->cual_sensorial),
                "Sistema osteomuscular"=>array("condicion"=>$request->muscular,"cual"=>$request->cual_muscular)
      );
      $exploracion=array("Exploracion fisica"
        =>array("T.A."=>$request->ta,
            "F.C."=>$request->fc,
            "F.R."=>$request->fr,
            "Temp"=>$request->temp,
            "Talla"=>$request->talla,
            "S02"=>$request->s02,
            "Peso actual"=>$request->peso,
            "Peso anterior"=>$request->p_anterior,
            "Peso ideal"=>$request->p_ideal,
            "IMC"=>$request->imc
        ),"Exploracion general"
        =>array("Exploracion de conciencia"=>$request->conciencia,
            "Actitud"=>$request->action,
            "Movimientos anormales"=>$request->mov,
            "Postura"=>$request->postura,
            "Marcha"=>$request->marcha,
            "Estado general de nutricion"=>$request->nutricion
        ),"Exploracion por region"
        =>array("Piel y anexos"=>$request->piel,
            "Cabeza"=>$request->cabeza,
            "Ojos"=>$request->ojos,
            "Oidos"=>$request->oidos,
            "Nariz"=>$request->nariz,
            "Boca"=>$request->boca,
            "Torax"=>$request->torax,
            "Vasos sanguineos"=>$request->vasos,
            "Mamas"=>$request->mamas,
            "Genitales"=>$request->genitales
        )
      );
      $musculoesqueletico=array("Columna"
        =>array("Cervical" =>$request->cervical,
          "Dorsolumbar"=>$request->dorsolumbar,
          "Sacroiliaca"=>$request->sacroiliaca
        ),"Miembro superior"
        =>array("Hombros"=>$request->hombros,
          "Codo"=>$request->codo,
          "Muneca"=>$request->muneca,
          "Mano"=>$request->mano
        ),"Miembro inferior"
        =>array("Cadera"=>$request->cadera,
          "Rodilla"=>$request->rodilla,
          "Tobillo"=>$request->tobillo,
          "Pie"=>$request->pie
        )
      );
      $postura=array(
        "Anterior"=>$request->po_anterior,
        "Lateral"=>$request->lateral,
        "Posterior"=>$request->posterior
      );
      $diagnostico = new diagnostico();
      $diagnostico->id_paciente=$request->paciente;
      $diagnostico->padecimiento_actual=json_encode($padecimiento_actual);
      $diagnostico->sintomas_generales=json_encode($sintomas_generales);
      $diagnostico->aparatos_sistemas=json_encode($aparatos);
      $diagnostico->musculoesqueletico=json_encode($musculoesqueletico);
      $diagnostico->postura=json_encode($postura);
      $diagnostico->diagnosticos_ant=$request->ant;
      $diagnostico->estudios=$request->estudios;
      $diagnostico->tratamentos_ant=$request->tratamientos;
      $diagnostico->dermatomas=$request->dermatomas;
      $diagnostico->inquietudes=$request->inquietud;
      $diagnostico->exploracion=json_encode($exploracion);
      $diagnostico->diagnostico=$request->diag;
      $diagnostico->pronostico=$request->pronostico;
      $diagnostico->activo='1';
      $diagnostico->save();

      $paciente=$request->paciente;

      $id_diagnostico=diagnostico::select('id_diagnostico')->where('activo','1')->first();

      $altas= new alta();
      $altas->id_diagnostico=$id_diagnostico->id_diagnostico;
      $altas->save();

      $diagnosticos=diagnostico::select('id_diagnostico','diagnostico','pronostico','activo')->where('id_paciente',$paciente)->get();
      return view('diagnosticos',compact(['paciente','diagnosticos']));


    }
}
