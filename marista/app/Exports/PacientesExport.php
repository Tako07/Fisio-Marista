<?php

namespace App\Exports;

use App\Models\paciente;
use App\Models\historia_clinica;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class PacientesExport implements FromView
//FromQuery,WithHeadings
{

    /**
    * @return \Illuminate\Support\Collection
    */

    //use Exportable;


    public function view():view{
      $pacientes=paciente::select('nombres','apaterno','amaterno','edad','curp','sexo',
        'nacionalidad','edo_civil','ocupacion','estado','ciudad','calle','colonia','codigo_postal'
        ,'paciente.created_at as pcreado','paciente.updated_at as pupdate'
        ,'h.ant_heredo_fam as ant_fam','h.ant_pers_no_pat as ant_pers_no','h.ant_pers_pat as ant_pers_pat','h.ant_gineco_obs'
        ,'h.created_at as hcreado','h.updated_at as hupdate')->join('historia_clinica as h','paciente.id_paciente','=','h.id_paciente')->get();
      return view('database',compact(["pacientes"]));
    }

    public function query()
    {
        return paciente::query()->select('nombres','apaterno','amaterno','edad','curp','sexo',
          'nacionalidad','edo_civil','ocupacion','estado','ciudad','calle','colonia','codigo_postal'
          ,'paciente.created_at as pcreado','paciente.updated_at as pupdate'
          ,'h.ant_heredo_fam','h.ant_pers_no_pat','h.ant_pers_pat','h.ant_gineco_obs'
          ,'h.created_at','h.updated_at')->join('historia_clinica as h','paciente.id_paciente','=','h.id_paciente');
    }


    public function headings(): array
    {
        return [
            'Nombres',
            'Apellido paterno',
            'Apellido materno',
            'Edad',
            'CURP',
            'Sexo',
            'Nacionalidad',
            'Estado civil',
            'Profeción',
            'Estado',
            'Ciudad',
            'Calle',
            'Colonia',
            'Código postal',
            'Creación de paciente',
            'Actualización de paciente',
            'Antecedentes heredo familiares',
            'Antecedentes personales no patológicos',
            'Antecedentes personales patológicos',
            'Antecedentes gineco obstéricos',
            'Creación de historial',
            'Actualización de historial'

        ];
    }

}
