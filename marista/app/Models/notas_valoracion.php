<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class notas_valoracion extends Model
{
  protected $table ="notas_valoracion";
  protected $fillable = [
      'id','id_paciente','id_diagnostico','eva','pruebas_funcionales',
      'actividad_funcional','fuerza','rom','created_at'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'id'
  ];
}
