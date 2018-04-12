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
		'tipo',
    'motivo',
    'fecha',
		'status',
		'intento',
		'documento'

   ];

   

}
