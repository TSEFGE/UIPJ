<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgrupacionDelito extends Model
{
    //

      public $table = 'agrupacion_delito';

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idDelito';
        'nombre',
        
    ];

   


}
