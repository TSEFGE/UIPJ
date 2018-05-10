<?php

namespace App\Models\uatuipj;

use Illuminate\Database\Eloquent\Model;

class Carpeta2 extends Model
{
    protected $connection = 'uatuipj';

    public $table = 'carpeta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idUnidad',
        'idFiscal',
        'numCarpeta',
        'fechaInicio',
        'conDetenido',
        'esRelevante',
        'idEstadoCarpeta',
        'horaIntervencion',
        'descripcionHechos',
        'npd',
        'numIph',
        'fechaIph',
        'narracionIph',
        'idTipoDeterminacion',
        'fechaDeterminacion',
        'observacionesEstatus',
        'asignada',
        'nombreFiscalUat'
    ];

    public function acusaciones()
    {
       return $this->hasMany('App\Models\uatuipj\Acusacion2');
    }

    public function variablesPersona()
    {
       return $this->hasMany('App\Models\uatuipj\VariablesPersona2');
    }

    public function tipifDelitos()
    {
       return $this->hasMany('App\Models\uatuipj\TipifDelito2');
    }
}
