<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatLugar extends Model
{
    protected $table = 'cat_lugar';

    protected $fillable = [
        'id', 'nombre',
    ];

    public function tipifDelitos()
    {
        return $this->hasMany('App\Models\TipifDelito');
    }
}
