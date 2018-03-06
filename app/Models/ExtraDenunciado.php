<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraDenunciado extends Model
{
    protected $table = 'extra_denunciado';

    protected $fillable = [
        'id', 'idVariablesPersona', 'idNotificacion', 'idPuesto', 'alias', 'senasPartic', 'ingreso', 'periodoIngreso', 'residenciaAnterior', 'idAbogado', 'personasBajoSuGuarda', 'perseguidoPenalmente', 'vestimenta', 'narracion',
    ];
    
    public function acusaciones()
    {
        return $this->hasMany('App\Models\Acusacion');
    }

    public function variablesPersona()
    {
        return $this->belongsTo('App\Models\VariablesPersona');
    }

    public function notificacion()
    {
        return $this->hasOne('App\Models\Notificacion');
    }

    public function puesto()
    {
        return $this->belongsTo('App\Models\CatPuesto');
    }

    public function abogado()
    {
        return $this->belongsTo('App\Models\Abogado');
    }
}
