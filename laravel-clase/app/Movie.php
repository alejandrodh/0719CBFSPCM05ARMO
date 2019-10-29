<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $table = "movies"; //Si cumple con std no hace falta aclararlo
    public $primaryKey = "id";//Si cumple con std no hace falta aclararlo
    public $timestamps = true;//Si cumple con std no hace falta aclararlo

    public $guarded = []; //Campos que están protegidos para carga masiva. Array vacio permite cargar todos los campos.
  //  public $fillable = [];  //Campos que están  permitidos para carga masiva. Array vacio NO permite cargar campos.
}
