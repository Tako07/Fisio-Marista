<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class diagnostico extends Model
{
  protected $table ="diagnostico";

  protected $fillable = [
    "id_diagnostico","id_paciente","padecimiento_actual",
    "sintomas_generales","aparatos_sistemas","diagnosticos_ant",
    "estudios","tratamentos_ant","inquietudes","exploracion",
    "musculoesqueletico","postura","dermatomas","diagnostico","pronostico",
    "objetivos","plan","activo"
  ];

  protected $hidden = [

  ];

  protected $casts = [

  ];
}
