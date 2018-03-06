<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'notificacion';

    protected $fillable = [
        'id', 'idDomicilio', 'correo', 'telefono', 'fax',
    ];

    public function extraDenunciante()
    {
        return $this->belongsTo('App\Models\ExtraDenunciante');
    }

    public function extraDenunciado()
    {
        return $this->belongsTo('App\Models\ExtraDenunciado');
    }

    public function domicilio()
    {
        return $this->belongsTo('App\Models\Domicilio');
    }
}
