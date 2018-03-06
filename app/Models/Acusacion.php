<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acusacion extends Model
{
    public $table = 'acusacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idCarpeta',
        'idDenunciante',
        'idTipifDelito',
        'idDenunciado'
    ];

    public function extraDenunciante(){
        return $this->belongsTo('App\Models\ExtraDenunciante');
    }

    public function extraDenunciado(){
        return $this->belongsTo('App\Models\ExtraDenunciado');
    }

    public function carpeta(){
        return $this->belongsTo('App\Models\Carpeta');
    }

    public function tipifDelito(){
        return $this->hasOne('App\Models\TipifDelito');
    }

}
