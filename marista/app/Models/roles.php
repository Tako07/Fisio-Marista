<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
  protected $table ="roles";
  protected $fillable = [
      'id','descripcion'
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
