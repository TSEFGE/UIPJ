<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatTipoDeterminacion extends Model
{
    protected $table = 'cat_tipo_determinacion';

    protected $fillable = [
        'id', 'nombre',
    ];

    public function carpetas()
    {
        return $this->hasMany('App\Models\Carpeta');
    }
}
