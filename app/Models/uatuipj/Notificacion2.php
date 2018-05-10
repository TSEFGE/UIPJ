<?php

namespace App\Models\uatuipj;

use Illuminate\Database\Eloquent\Model;

class Notificacion2 extends Model
{
    protected $connection = 'uatuipj';

    protected $table = 'notificacion';

    protected $fillable = [
        'id', 'idDomicilio', 'correo', 'telefono', 'fax',
    ];

    public function extraDenunciante()
    {
        return $this->belongsTo('App\Models\uatuipj\ExtraDenunciante');
    }

    public function extraDenunciado()
    {
        return $this->belongsTo('App\Models\uatuipj\ExtraDenunciado');
    }
}
