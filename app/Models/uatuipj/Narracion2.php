<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Narracion2 extends Model
{
    protected $connection = 'uatuipj';

    public $table = 'narracion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idInvolucrado',
        'idCarpeta',
        'narracion',
        'tipoInvolucrado',
        'archivo',
    ];

     public function carpeta(){
        return $this->belongsTo('App\Models\uatuipj\Carpeta2');
    }
}
