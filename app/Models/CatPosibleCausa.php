<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatPosibleCausa extends Model
{
    public $table = 'cat_posible_causa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'nombre'
    ];

    public function tipifDelitos()
    {
        return $this->hasMany('App\Models\TipifDelito');
    }
}
