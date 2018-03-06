<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraAutoridad extends Model
{
    protected $table = 'extra_autoridad';

    protected $fillable = [
        'id', 'idVariablesPersona', 'antiguedad', 'rango', 'horarioLaboral', 'narracion',
    ];

    public function variablesPersona()
    {
        return $this->belongsTo('App\Models\VariablesPersona');
    }
}
