<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regiones extends Model
{
    public $table = 'region';

    public $fillable = [
        'id',
        'region',

    ];
    public function unidades()
    {
        return $this->belongsTo('App\Models\Unidad');
    }
    public function distritos()
    {
        return $this->belongsTo('App\Models\Distrito');
    }
}
