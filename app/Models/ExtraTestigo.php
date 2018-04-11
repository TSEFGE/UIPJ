<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraTestigo extends Model
{
    public $table = 'extra_testigo';

    public $fillable = [
        'id',
        'idVariablesPersona',
        'idNotificaciones',
        'conoceAlDenunciado',

    ];

    public function variablesPersona()
    {
       return $this->belongsTo('app/Models/VariablesPersona');
    }


    public function notificacion()
    {
       return $this->hasOne('app/Models/Notificacion');
    }

}
