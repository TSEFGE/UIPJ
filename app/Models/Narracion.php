<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Narracion extends Model
{
     public $table = 'narracion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idInvolucrado',
        'idCarpeta',
        'narracion',
        'tipo',
        'archivo',

       
    ];

     public function carpeta(){
        return $this->belongsTo('App\Models\Carpeta');
    }
}
