<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatTipoArma extends Model
{
    protected $table = 'cat_tipo_arma';

    protected $fillable = [
        'id', 'nombre',
    ];

    public function tipifDelitos()
    {
        return $this->hasMany('App\Models\TipifDelito');
    }

    public function armas()
    {
        return $this->hasMany('App\Models\CatArma');
    }
}
