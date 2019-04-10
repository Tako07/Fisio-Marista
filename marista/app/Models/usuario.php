<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
  protected $table ="usuario";
  protected $fillable = [
      'id_usuario','username','nombres','rol', 'apaterno','amaterno',
      'email','fecha_nacimiento','calle','num_casa',
      'colonia','cp','num_tel','num_cel','password','status'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password'
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
      'fecha_nacimiento' => 'date'
  ];
}
