<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interprete extends Model
{
    protected $table = 'interprete';

    protected $fillable = [
        'id', 'nombre', 'organizacion', 'lengua',
    ];

    public function variablesPersonas()
    {
        return $this->hasMany('App\Models\VariablesPersona');
    }
}
