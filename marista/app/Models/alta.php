<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alta extends Model
{
  protected $table ="altas";

  protected $fillable = [
    "id","id_diagnostico","medico","fisioterapeuta","pasante"
  ];

  protected $hidden = [

  ];

  protected $casts = [

  ];
}
