<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interprete extends Model
{
    protected $table = 'interprete';

    protected $fillable = [
        'id', 'nombre', 'organizacion', 'idLengua',
    ];

    public function variablesPersonas()
    {
        return $this->hasMany('App\Models\VariablesPersona');
    }

    public function lengua()
    {
        return $this->belongsTo('App\Models\CatLengua');
    }
}
