<?php

namespace App\Models\uatuipj;

use Illuminate\Database\Eloquent\Model;

class Acusacion2 extends Model
{
    protected $connection = 'uatuipj';

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
        return $this->belongsTo('App\Models\uatuipj\ExtraDenunciante');
    }

    public function extraDenunciado(){
        return $this->belongsTo('App\Models\uatuipj\ExtraDenunciado');
    }

    public function carpeta(){
        return $this->belongsTo('App\Models\uatuipj\Carpeta');
    }

    public function tipifDelito(){
        return $this->hasOne('App\Models\uatuipj\TipifDelito');
    }
}
