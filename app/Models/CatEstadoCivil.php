<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatEstadoCivil extends Model
{
    protected $table = 'cat_estado_civil';

    protected $fillable = [
        'id', 'idMunicipio', 'nombre',
    ];

    public function variablesPersonas()
    {
        return $this->hasMany('App\Models\VariablesPersona');
    }
}
