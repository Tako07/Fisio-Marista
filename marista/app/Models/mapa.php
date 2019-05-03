<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mapa extends Model
{
  protected $table ="mapa";

  protected $fillable = [
    "id","id_paciente","musculos","id_diagnostico"
  ];

  protected $hidden = [

  ];

  protected $casts = [

  ];
}
