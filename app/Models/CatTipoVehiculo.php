<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatTipoVehiculo extends Model
{
    public $table = 'cat_tipo_vehiculo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'nombre',
        'idClaseVehiculo'
    ];

    public function vehiculos(){
        return $this->hasMany('App\Models\Vehiculo');
    }

    public function claseVehiculo(){
        return $this->belongsTo('App\Models\CatClaseVehiculo');
    }

        public static function tipoVehiculos($id){
        return CatTipoVehiculo::select('id', 'nombre')->where('idClaseVehiculo', '=', $id)->orderBy('nombre', 'ASC')->get();
    }

}
