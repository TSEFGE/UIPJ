<?php

namespace App\Models\uatuipj;

use Illuminate\Database\Eloquent\Model;

class TipifDelito2 extends Model
{
    protected $connection = 'uatuipj';

    public $table = 'tipif_delito';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idCarpeta',
        'idDelito',
        'conViolencia',
        'idArma',
        'idPosibleCausa',
        'idModalidad',
        'formaComision',
        'fecha',
        'hora',
        'idZona',
        'idLugar',
        'idDomicilio',
        'entreCalle',
        'yCalle',
        'calleTrasera',
        'puntoReferencia',
        'idAgrupacion1',
        'idAgrupacion2',
       
    ];

        

    public function carpeta()
    {
        return $this->belongsTo('App\Models\uatuipj\Carpeta2');
    }
    
    public function acusacion()
    {
       return $this->belongsTo('App\Models\uatuipj\Acusacion2');
    }
}
