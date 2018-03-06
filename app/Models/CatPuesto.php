<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatPuesto extends Model
{
    protected $table = 'cat_puesto';

    protected $fillable = [
        'id', 'nombre',
    ];

    public function extraDenunciados(){
        return $this->hasMany('App\Models\ExtraDenunciado');
    }
}
