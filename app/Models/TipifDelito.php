<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipifDelito extends Model
{
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
        'puntoReferencia'
    ];

    public function carpeta()
    {
        return $this->belongsTo('App\Models\Carpeta');
    }
    
    public function acusacion()
    {
       return $this->belongsTo('app/Models/Acusacion');
    }

    public function vehiculos()
    {
       return $this->hasMany('app/Models/Vehiculo');
    }

    public function delito()
    {
        return $this->belongsTo('app/Models/CatDelito');
    }

    public function arma()
    {
        return $this->belongsTo('app/Models/CatArma');
    }

    public function posibleCausa()
    {
        return $this->belongsTo('app/Models/CatPosibleCausa');
    }

    public function modalidad()
    {
        return $this->belongsTo('app/Models/CatModalidad');
    }

    public function zona()
    {
        return $this->belongsTo('app/Models/Domicilio');
    }

    public function lugar()
    {
        return $this->belongsTo('app/Models/CatLugar');
    }

    public function domicilio()
    {
        return $this->belongsTo('app/Models/Domicilio');
    }
}
