<?php

namespace App\Models\uatuipj;

use Illuminate\Database\Eloquent\Model;

class VariablesPersona2 extends Model
{
    protected $connection = 'uatuipj';

    public $table = 'variables_persona';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $fillable = [
        'id',
        'idCarpeta',
        'idPersona',
        'edad',
        'telefono',
        'motivoEstancia',
        'idOcupacion',
        'idEstadoCivil',
        'idEscolaridad',
        'idReligion',
        'idDomicilio',
        'idInterprete',
        'docIdentificacion',
        'numDocIdentificacion',
        'lugarTrabajo',
        'idDomicilioTrabajo',
        'telefonoTrabajo',
        'representanteLegal',
    ];

    public function carpeta()
    {
        return $this->belongsTo('App\Models\uatuipj\Carpeta');
    }

    public function extraDenunciado()
    {
        return $this->hasOne('App\Models\uatuipj\ExtraDenunciado');
    }

    public function extraDenuncianate()
    {
        return $this->hasOne('App\Models\uatuipj\ExtraDenunciante');
    }

    public function extraAutoridad()
    {
        return $this->hasOne('App\Models\uatuipj\ExtraAutoridad');
    }

    public function extraAbogado()
    {
        return $this->hasOne('App\Models\uatuipj\ExtraAbogado');
    }
}
