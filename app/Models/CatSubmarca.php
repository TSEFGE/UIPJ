<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatSubmarca extends Model
{
    protected $table = 'cat_submarca';

    protected $fillable = [
        'id', 'idSubmarca', 'idMarca', 'nombre',
    ];

    public function vehiculos(){
        return $this->hasMany('App\Models\Vehiculo');
    }

    public function marca(){
        return $this->belongsTo('App\Models\CatMarca');
    }

    public static function submarcas($id){
        return CatSubmarca::select('id', 'nombre')->where('idMarca', '=', $id)->get();
    }
}
