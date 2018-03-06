<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatEstado extends Model
{
    protected $table = 'cat_estado';

    protected $fillable = [
        'id', 'nombre', 'abreviatura',
    ];

    public function municipios(){
    	return $this->hasMany('App\Models\CatMunicipio');
    }

    public function vehiculos(){
    	return $this->hasMany('App\Models\Vehiculo');
    }
}
