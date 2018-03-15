<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatAgrupacion1 extends Model
{
     public $table = 'cat_agrupacion1';

  
    public $fillable = [
        'id',
        'nombre',
        'idCatDelito'
     ];


 public function catDelitos(){
        return $this->belongsTo('App\Models\CatDelito');
    }
      public function agrupaciones2(){
    	return $this->hasMany('App\Models\CatAgrupacion2');
    }

    public static function agrupaciones1($id){
        return CatAgrupacion1::select('id', 'nombre')->where('idCatDelito', '=', $id)->orderBy('nombre', 'ASC')->get();
    }

}
