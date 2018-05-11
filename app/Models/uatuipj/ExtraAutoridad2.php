<?php

namespace App\Models\uatuipj;

use Illuminate\Database\Eloquent\Model;

class ExtraAutoridad2 extends Model
{
	protected $connection = 'uatuipj';

    protected $table = 'extra_autoridad';

    protected $fillable = [
        'id', 'idVariablesPersona', 'antiguedad', 'rango', 'horarioLaboral', 
    ];

    public function variablesPersona()
    {
        return $this->belongsTo('App\Models\uatuipj\VariablesPersona2');
    }
}
