<?php

namespace App\Models\uatuipj;

use Illuminate\Database\Eloquent\Model;

class ExtraDenunciante2 extends Model
{
    protected $connection = 'uatuipj';

    public $table = 'extra_denunciante';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idVariablesPersona',
        'idNotificaciones',
        'idAbogado',
        'conoceAlDenunciado',
        'esVictima',
        'identidadResguardada'
     
    ];
    
    public function variablesPersona()
    {
       return $this->belongsTo('App\Models\uatuipj\VariablesPersona');
    }

    public function extraAbogado()
    {
       return $this->belongsTo('App\Models\uatuipj\ExtraAbogado');
    }

    public function acusacion()
    {
       return $this->belongsTo('App\Models\uatuipj\Acusacion');
    }
}
