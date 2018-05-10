<?php

namespace App\Models\uatuipj;

use Illuminate\Database\Eloquent\Model;

class ExtraDenunciado2 extends Model
{
    protected $connection = 'uatuipj';

    protected $table = 'extra_denunciado';

    protected $fillable = [
        'id', 'idVariablesPersona', 'idNotificacion', 'idPuesto', 'alias', 'senasPartic', 'ingreso', 'periodoIngreso', 'residenciaAnterior', 'idAbogado', 'personasBajoSuGuarda', 'perseguidoPenalmente', 'vestimenta'
    ];
    
    public function acusaciones()
    {
        return $this->hasMany('App\Models\uatuipj\Acusacion');
    }

    public function variablesPersona()
    {
        return $this->belongsTo('App\Models\uatuipj\VariablesPersona');
    }

    public function extraAbogado()
    {
        return $this->belongsTo('App\Models\uatuipj\Abogado');
    }
}
