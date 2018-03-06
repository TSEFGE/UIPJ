<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraDenunciante extends Model
{
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
        'narracion'
    ];
    
    public function variablesPersona()
    {
       return $this->belongsTo('app/Models/VariablesPersona');
    }

    public function abogado()
    {
       return $this->belongsTo('app/Models/ExtraAbogado');
    }

    public function notificacion()
    {
       return $this->hasOne('app/Models/Notificacion');
    }

    public function acusacion()
    {
       return $this->belongsTo('app/Models/Acusacion');
    }
}
