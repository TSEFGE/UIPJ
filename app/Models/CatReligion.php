<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatReligion extends Model
{
    protected $table = 'cat_religion';

    protected $fillable = [
        'id', 'nombre',
    ];

    public function variablesPersonas()
    {
        return $this->hasMany('App\Models\VariablesPersona');
    }
}
