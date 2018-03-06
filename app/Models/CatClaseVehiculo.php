<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatClaseVehiculo extends Model
{
    public $table = 'cat_clase_vehiculo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'nombre'
    ];

    public function tipoVehiculos(){
        return $this->hasMany('App\Models\CatTipoVehiculo');
    }
}
