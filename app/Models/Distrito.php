<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distritos extends Model
{
    public $table = 'distrito';

    public $fillable = [
        'id',
        'idRegion',
        'distrito',
    ];

    public function regiones()
    {
        return $this->hasMany('App\Models\Region');
    }

    public function unidades()
    {
        return $this->belongsTo('App\Models\Unidad');
    }

}
