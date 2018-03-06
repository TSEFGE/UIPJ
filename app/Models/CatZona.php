<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatZona extends Model
{
    protected $table = 'cat_zona';

    protected $fillable = [
        'id', 'nombre',
    ];

    public function tipifDelitos()
    {
        return $this->hasMany('App\Models\TipifDelito');
    }
}
