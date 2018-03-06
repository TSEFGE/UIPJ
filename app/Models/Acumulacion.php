<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acumulacion extends Model
{
    public $table = 'acumulacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idCarpetaP',
        'idCarpetaS'
    ];

    public function carpeta(){
        return $this->belongsTo('App\Models\Carpeta');
    }

}
