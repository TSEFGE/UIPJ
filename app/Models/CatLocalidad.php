<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatLocalidad extends Model
{
    protected $table = 'cat_localidad';

    protected $fillable = [
        'id', 'idMunicipio', 'nombre',
    ];

    public function municipio(){
    	return $this->belongsTo('App\Models\CatMunicipio');
    }

    public function domicilios(){
    	return $this->hasMany('App\Models\Domicilio');
    }

    public static function localidades($id){
        return CatLocalidad::select('id', 'nombre')->where('idMunicipio', '=', $id)->orderBy('nombre', 'ASC')->get();
    }
}
