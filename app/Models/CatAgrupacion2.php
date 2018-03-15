<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatAgrupacion2 extends Model
{
 public $table = 'cat_agrupacion2';


    public $fillable = [
        'id',
        'nombre',
        'idAgrupacion1'
     ];


     public function agrupacion1(){
        return $this->belongsTo('App\Models\CatAgrupacion1');
    }

    public function tipifDelitos(){
        return $this->hasMany('App\Models\TipifDelito');
    }

    public static function agrupaciones2($id){
        return CatAgrupacion2::select('id', 'nombre')->where('idAgrupacion1', '=', $id)->orderBy('nombre', 'ASC')->get();
    }
}
