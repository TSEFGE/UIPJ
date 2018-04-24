<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    public $table = 'unidad';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $fillable = [
        'id',
        'idDistrito',
        'idRegion',
        'nombre',
        'direccion',
        'latitud',
        'longitud',
        'telefono',
        'abrevMun',
        'nomCompleto',
        'consecutivo',
    ];

    public function carpetas()
    {
        return $this->hasMany('App\Models\Carpeta');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function distritos()
    {
        return $this->hasMany('App\Models\Distrito');
    }

    public function regiones()
    {
        return $this->hasMany('App\Models\Regiones');
    }

}
