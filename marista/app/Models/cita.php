<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
  protected $table ="citas";
  protected $fillable = [
      'id','descripcion','curp_paciente','fecha_cita','hora_cita',
      'asistencia','status','agendada_por','color','estado'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'id'
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
  ];
}
