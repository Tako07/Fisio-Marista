<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class historia_clinica extends Model
{
    protected $table ="historia_clinica";

    protected $fillable = [
      "id_historia","ant_heredo_fam","ant_pers_no_pat",
      "ant_pers_pat","ant_gineco_obs"
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];
}
