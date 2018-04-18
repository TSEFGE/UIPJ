<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    //

public $table = 'bitacora';
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     public $fillable = [
        'id',
        'idUsuario',
        'tabla',
        'accion',
        'descripcion',
        'idFilaAccion'
    ];



 public function user(){
        return $this->belongsTo('App\User');
    }



}
