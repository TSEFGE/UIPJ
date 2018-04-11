<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Citatorio extends Model
{
   public $table = 'citatorio';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [

		'id',
		'idAcusacion',
		'tipo',
		'status',
		'intento',
		'documento'

   ];

   public function Acusaciones()
    {
       return $this->belongsTo('app/Models/Acusacion');
    }

}
