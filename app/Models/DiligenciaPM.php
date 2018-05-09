<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiligenciaPM extends Model
{
    public $table = 'diligencias_pm';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $fillable = [
        'id', 'idAcusacion', 'numOficio', 'dictamen', 'status', 'oficio'
   ];

    public function acusacion()
    {
        return $this->belongsTo('app/Models/Acusacion');
    }
}
