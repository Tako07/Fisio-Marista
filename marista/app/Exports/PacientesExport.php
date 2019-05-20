<?php

namespace App\Exports;

use App\Models\paciente;
use App\Models\historia_clinica;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class PacientesExport implements FromQuery,WithHeadings
{

    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

    public function query()
    {
        return paciente::query()->select('nombres','apaterno','amaterno','edad','curp','sexo',
          'nacionalidad','edo_civil','ocupacion','estado','ciudad','calle','colonia','codigo_postal'
          ,'created_at','updated_at');
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
            'Creado',
            'Actualizado'

        ];
    }

}
