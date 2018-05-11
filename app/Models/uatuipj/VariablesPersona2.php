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
        return $this->belongsTo('App\Models\uatuipj\Carpeta2');
    }

    public function extraDenunciado()
    {
        return $this->hasOne('App\Models\uatuipj\ExtraDenunciado2');
    }

    public function extraDenuncianate()
    {
        return $this->hasOne('App\Models\uatuipj\ExtraDenunciante2');
    }

    public function extraAutoridad()
    {
        return $this->hasOne('App\Models\uatuipj\ExtraAutoridad2');
    }

    public function extraAbogado()
    {
        return $this->hasOne('App\Models\uatuipj\ExtraAbogado2');
    }
}
