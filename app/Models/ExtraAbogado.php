<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraAbogado extends Model
{
    public $table = 'extra_abogado';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idVariablesPersona',
        'cedulaProf',
        'sector',
        'correo',
        'tipo'
    ];

    public function variablesPersona()
    {
       return $this->belongsTo('app/Models/VariablesPersona');
    }

    public function extraDenunciante()
    {
       return $this->hasMany('app/Models/ExtraDenunciante');
    }

    public function extraDenunciado()
    {
       return $this->hasMany('app/Models/ExtraDenunciado');
    }
}
