<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiligenciaSP extends Model
{
    public $table = 'diligencias_sp';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id', 'idAcusacion', 'numOficio', 'termino', 'dictamen', 'status', 'oficio'
   ];

   public function acusacion()
    {
        return $this->belongsTo('app/Models/Acusacion');
    }

}
