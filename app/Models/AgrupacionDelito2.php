<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgrupacionDelito2 extends Model
{
    //

public $table = 'agrupacion_delito2';

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'idAgrupacion2',
        'idAgrupacion',
        'nombre'
        
    ];


}
