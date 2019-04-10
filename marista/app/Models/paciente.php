<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
  protected $table ="paciente";
  protected $fillable = [
      'id_paciente','nombres','apaterno','amaterno',
      'edad','curp','sexo','nacionalidad','edo_civil','ocupacion',
      'calle','colonia','codigo_postal','ciudad','estado',
      'num_tel','num_cel','religion','familiar_a_cargo'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'id_paciente'
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
  ];
}
