<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatOcupacion extends Model
{
    public $table = 'cat_ocupacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'nombre'
    ];

    public function variablesPersonas()
    {
       return $this->hasMany('app/Models/VariablesPersona');
    }
}
