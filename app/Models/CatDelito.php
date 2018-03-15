<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatDelito extends Model
{
    public $table = 'cat_delito';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'nombre',
        //'snVeh' se quito la columna, le corresponde al sist. de vehiculos
    ];

    public function tipifDelitos(){
        return $this->hasMany('App\Models\TipifDelito');
    }

     public function agrupaciones1(){
        return $this->hasMany('App\Models\CatAgrupacion1');
    }

  


}
