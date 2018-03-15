<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatAgrupacion1 extends Model
{
<<<<<<< HEAD
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

    public static function getAgrupaciones1($id){
        return CatAgrupacion1::select('id', 'nombre')->where('idCatDelito', '=', $id)->orderBy('nombre', 'ASC')->get();
    }
=======
		 public $table = 'cat_agrupacion1';

	
		public $fillable = [
				'id',
				'nombre',
				'idCatDelito'
		 ];


		public function catDelito(){
				return $this->belongsTo('App\Models\CatDelito');
		}
		
		public function agrupaciones2(){
			return $this->hasMany('App\Models\CatAgrupacion2');
		}

		public function tipifDelitos(){
			return $this->hasMany('App\Models\TipifDelito');
		}

		public static function agrupaciones1($id){
				return CatAgrupacion1::select('id', 'nombre')->where('idCatDelito', '=', $id)->orderBy('nombre', 'ASC')->get();
		}
>>>>>>> 4234c908c8bb0e4a04741989d96e51ea09808cad

}
